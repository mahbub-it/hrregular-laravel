# HR Regular — Employee Module: Fix & Learning Notes

> **Date:** 2026-05-27
> **Project:** `/var/www/html/hrregular` (Laravel)
> **Page fixed:** `http://127.0.0.1:8000/admin/employees`

---

## Overview of Problems Fixed Today

| # | Problem | Error / Symptom | Files Changed |
|---|---------|-----------------|---------------|
| 1 | Missing Eloquent relationships | 500 — `role` property does not exist on line 133 | `Employee.php`, `EmployeeController.php`, `index.blade.php` |
| 2 | Route not defined | `RouteNotFoundException: admin.employee.edit` | `web.php` |
| 3 | Pagination not working | Always showed "1 to 1 of 1 entries", static links | `index.blade.php`, `AppServiceProvider.php` |
| 4 | Images not showing | Broken image tags, wrong path | `EmployeeController.php`, `index.blade.php` |

---

## Problem 1 — 500 Error: `$employee->role->name` (Line 133)

### Error Message
```
Illuminate\Foundation\Bootstrap\HandleExceptions::{closure}()
resources/views/admin/employee/index.blade.php:133
```

### Root Cause
The blade template had three **wrong property accesses**:

| Wrong (blade had) | Why wrong |
|---|---|
| `$employee->role->name` | No `role` relationship on `Employee` model |
| `$employee->name` | `name` lives on `User`, not `Employee` |
| `$employee->email` | `email` lives on `User`, not `Employee` |
| `$employee->image` | Column is named `profile_picture`, not `image` |

The `Employee` model only had a `designation()` relationship. It was **missing** the `user()` relationship entirely.

---

### Fix 1A — Add `user()` relationship to the Employee model

**File:** `app/Models/Employee.php`

```php
// BEFORE — only had designation()
public function designation()
{
    return $this->belongsTo(Designation::class);
}

// AFTER — added user() as well
public function user()
{
    return $this->belongsTo(User::class);  // uses user_id FK on employees table
}

public function designation()
{
    return $this->belongsTo(Designation::class);
}
```

> **Key concept:** An `Employee` row has a `user_id` foreign key column.
> To access the related `User` record, you need a `belongsTo` relationship.
> Without it, `$employee->user` returns `null` and `$employee->user->name` throws a fatal error.

---

### Fix 1B — Eager-load relationships in the controller

**File:** `app/Http/Controllers/Admin/EmployeeController.php`

```php
// BEFORE — no eager loading (causes N+1 problem)
$employees = Employee::paginate(10);

// AFTER — eager load both relationships
$employees = Employee::with(['user', 'designation'])->paginate(10);
```

> **Key concept — N+1 problem:**
> If you loop 100 employees and access `$employee->user` without eager loading,
> Laravel runs 100 separate SQL queries (one per employee).
> Using `with(['user'])` runs just **1 extra query** to fetch all users at once.

---

### Fix 1C — Fix the blade template property accesses

**File:** `resources/views/admin/employee/index.blade.php`

```blade
{{-- BEFORE --}}
{{ $employee->name }}           {{-- Wrong: name is on User --}}
{{ $employee->email }}          {{-- Wrong: email is on User --}}
{{ $employee->role->name }}     {{-- Wrong: no role relationship exists --}}

{{-- AFTER --}}
{{ $employee->user->name ?? 'N/A' }}
{{ $employee->user->email ?? 'N/A' }}
{{ $employee->designation->designation_name ?? 'N/A' }}
```

> **Key concept — `?? 'N/A'` null-safe fallback:**
> If `user` or `designation` is null (e.g. orphaned DB record), instead of crashing
> with a "property on null" error, it gracefully shows 'N/A'.
> Always use this when accessing related model properties in a loop.

> **Key concept — Designation field name:**
> The `Designation` model uses `designation_name` as its column (not `name`).
> Always check the model's `$fillable` array or migration file to confirm exact column names.

---

## Problem 2 — RouteNotFoundException: `admin.employee.edit`

### Error Message
```
Symfony\Component\Routing\Exception\RouteNotFoundException
Route [admin.employee.edit] not defined.
```

### Root Cause
In `web.php`, only the **index** route was registered for employees:

```php
// Only this existed:
Route::get('employees', [Admin\EmployeeController::class, 'index'])->name('admin.employees');
```

But the blade was calling:
```blade
{{ route('admin.employee.edit', $employee->id) }}
```

### Fix — Add all CRUD routes in `routes/web.php`

**File:** `routes/web.php` (inside the `admin` prefix group)

```php
// BEFORE — only index route
Route::get('employees', [Admin\EmployeeController::class, 'index'])->name('admin.employees');

// AFTER — full CRUD set
Route::get('employees',               [Admin\EmployeeController::class, 'index'])  ->name('admin.employees');
Route::get('employees/create',        [Admin\EmployeeController::class, 'create']) ->name('admin.employee.create');
Route::post('employees/store',        [Admin\EmployeeController::class, 'store'])  ->name('admin.employee.store');
Route::get('employees/edit/{id}',     [Admin\EmployeeController::class, 'edit'])   ->name('admin.employee.edit');
Route::post('employees/update/{id}',  [Admin\EmployeeController::class, 'update']) ->name('admin.employee.update');
Route::delete('employees/delete/{id}',[Admin\EmployeeController::class, 'destroy'])->name('admin.employee.destroy');
```

### How to verify routes are registered

```bash
php artisan route:list --name=admin.employee
```

Expected output:
```
GET|HEAD   admin/employees               admin.employees        › EmployeeController@index
GET|HEAD   admin/employees/create        admin.employee.create  › EmployeeController@create
POST       admin/employees/store         admin.employee.store   › EmployeeController@store
GET|HEAD   admin/employees/edit/{id}     admin.employee.edit    › EmployeeController@edit
POST       admin/employees/update/{id}   admin.employee.update  › EmployeeController@update
DELETE     admin/employees/delete/{id}   admin.employee.destroy › EmployeeController@destroy
```

> **Key concept — Route naming convention:**
> `admin.employees` (plural) = index list page.
> `admin.employee.edit` (singular) = action on one employee.
> This is a common Laravel pattern — stay consistent or you get `RouteNotFoundException`.

---

## Problem 3 — Pagination Not Working

### Symptom
- Always showed **"Showing 1 to 1 of 1 entries"** regardless of data
- Previous / Next buttons were static HTML, not real links
- Clicking page numbers did nothing

### Root Cause — Two issues

**Issue A:** The blade had **hardcoded** static pagination HTML copy-pasted from a UI template.

**Issue B:** Laravel 9+ renders `$model->links()` using **Tailwind CSS** classes by default.
Since this project uses Bootstrap, the output looked broken/unstyled.

---

### Fix 3A — Replace hardcoded HTML with dynamic Laravel pagination

**File:** `resources/views/admin/employee/index.blade.php`

```blade
{{-- BEFORE — hardcoded, never changes --}}
<div class="dataTables_info">Showing 1 to 1 of 1 entries</div>
<ul class="pagination">
    <li class="page-item previous disabled"><a href="#">Previous</a></li>
    <li class="page-item active"><a href="#">1</a></li>
    <li class="page-item next disabled"><a href="#">Next</a></li>
</ul>

{{-- AFTER — fully dynamic --}}
<div class="dataTables_info" role="status" aria-live="polite">
    Showing {{ $employees->firstItem() ?? 0 }} to {{ $employees->lastItem() ?? 0 }}
    of {{ $employees->total() }} entries
</div>

{{ $employees->links() }}
```

> **Key concept — Useful Paginator methods:**
>
> | Method | Returns |
> |--------|---------|
> | `$employees->firstItem()` | Number of first record on current page (e.g. 11 on page 2) |
> | `$employees->lastItem()` | Number of last record on current page |
> | `$employees->total()` | Total records across all pages |
> | `$employees->links()` | Rendered HTML pagination navigation |
> | `$employees->currentPage()` | Current page number |
> | `$employees->lastPage()` | Last page number |
> | `$employees->perPage()` | Records per page |

---

### Fix 3B — Configure Bootstrap pagination in AppServiceProvider

**File:** `app/Providers/AppServiceProvider.php`

```php
// BEFORE — empty boot method, uses Tailwind by default
use Illuminate\Support\ServiceProvider;

public function boot(): void
{
    //
}

// AFTER — switches to Bootstrap pagination HTML
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;          // <-- add this import

public function boot(): void
{
    Paginator::useBootstrap();                 // <-- add this line
}
```

> **Key concept:**
> Laravel ships with two built-in pagination views: Tailwind (default) and Bootstrap.
> `Paginator::useBootstrap()` makes `$model->links()` output Bootstrap-compatible
> `page-item` / `page-link` classes instead of Tailwind utility classes.
> This must be set once in `AppServiceProvider::boot()` — it applies globally.

---

## Problem 4 — Employee Images Not Showing

### Symptom
All employee profile images showed as broken (missing icon) in the browser.

### Root Cause — Three sub-issues

| Sub-issue | Detail |
|-----------|--------|
| A | `$employee->profile_picture` is `null` in the database for all employees |
| B | The blade used `asset('profile/' . ...)` but `public/profile/` directory does not exist |
| C | Images are stored via **Spatie Media Library** on the `User` model, not on `Employee` |

### Diagnosis Commands Used

```bash
# 1. Check what folders exist in public/
ls public/

# 2. Check what's in Spatie's storage folder
ls storage/app/public/

# 3. Check actual DB value for profile_picture
php artisan tinker --execute="echo App\Models\Employee::first()->profile_picture ?? 'null';"

# 4. Inspect User model's Spatie media data
php artisan tinker --execute="print_r(App\Models\User::with('media')->first()?->toArray());"

# 5. Find default avatar files in the project
find public/assets -name "*.png" | grep -i "avatar\|user\|profile"
```

**Tinker output confirmed:**
```
// profile_picture column:
null

// Spatie media original_url:
http://127.0.0.1:8000/storage/17/mahbub2.jpg
```

Images are served from `storage/app/public/{user_id}/filename.jpg`
→ accessible at `/storage/{user_id}/filename.jpg` (via the `public/storage` symlink).

---

### Fix 4A — Eager-load `user.media` in controller

**File:** `app/Http/Controllers/Admin/EmployeeController.php`

```php
// BEFORE
$employees = Employee::with(['user', 'designation'])->paginate(10);

// AFTER — dot notation loads the nested user → media relationship
$employees = Employee::with(['user.media', 'designation'])->paginate(10);
```

> **Key concept — Nested eager loading with dot notation:**
> `with(['user.media'])` tells Laravel:
> "For each employee, load their user, and for each user, load their media collection."
> Without this, `getFirstMediaUrl()` would fire a separate DB query for every single employee.

---

### Fix 4B — Use Spatie's `getFirstMediaUrl()` in the blade

**File:** `resources/views/admin/employee/index.blade.php`

```blade
{{-- BEFORE — wrong path, profile_picture is null --}}
<img src="{{ asset('profile/' . $employee->profile_picture) }}" ...>

{{-- AFTER — use Spatie Media Library via User relationship --}}
@php
    $avatar = $employee->user?->getFirstMediaUrl()
                ?: asset('assets/png/avatar.png');
@endphp
<img src="{{ $avatar }}"
     class="mr-2 taskEmployeeImg rounded-circle"
     alt="{{ $employee->user->name ?? 'Employee' }}">
```

> **Key concept — `?->` Nullsafe operator (PHP 8):**
> `$employee->user?->getFirstMediaUrl()` — if `$employee->user` is `null`,
> the `?->` returns `null` instead of throwing "Call to member function on null".
> Then `?: asset('assets/png/avatar.png')` provides the fallback default avatar.

> **Key concept — Spatie `getFirstMediaUrl()`:**
> Returns the full public URL of the first uploaded media file for that model.
> Returns an **empty string `""`** (falsy) if no media has been uploaded,
> so the `?:` fallback correctly activates.

> **How to check the storage symlink exists:**
> ```bash
> php artisan storage:link
> # If already linked, you'll see: The [public/storage] link already exists.
> ```

---

## Files Changed — Complete Summary

| File | Change Made |
|------|-------------|
| `app/Models/Employee.php` | Added `user()` belongsTo relationship |
| `app/Http/Controllers/Admin/EmployeeController.php` | Added `with(['user.media', 'designation'])` eager loading |
| `routes/web.php` | Added 5 missing employee CRUD routes (create, store, edit, update, destroy) |
| `resources/views/admin/employee/index.blade.php` | Fixed image src, name, email, role→designation, replaced hardcoded pagination |
| `app/Providers/AppServiceProvider.php` | Added `Paginator::useBootstrap()` |

---

## Quick Reference — Key Laravel Concepts from Today

### Eloquent Relationships

```php
// belongsTo — this model owns the foreign key
// employees.user_id → users.id
public function user()
{
    return $this->belongsTo(User::class);
}

// employees.designation_id → designations.id
public function designation()
{
    return $this->belongsTo(Designation::class);
}

// hasOne — inverse: User owns one Employee
public function employee()
{
    return $this->hasOne(Employee::class);
}
```

### Eager Loading Cheatsheet

```php
Employee::with('user')->get();                    // single
Employee::with(['user', 'designation'])->get();   // multiple
Employee::with(['user.media'])->get();            // nested (user → its media)
Employee::with(['user.media', 'designation'])->get(); // nested + extra
```

### Pagination Cheatsheet

```php
// Controller
$employees = Employee::with([...])->paginate(10);

// Blade — display info
Showing {{ $employees->firstItem() }} to {{ $employees->lastItem() }}
of {{ $employees->total() }} entries

// Blade — render links
{{ $employees->links() }}

// AppServiceProvider::boot() — use Bootstrap styles
Paginator::useBootstrap();
```

### Spatie Media Library Cheatsheet

```php
// Model setup
class User extends Authenticatable implements HasMedia
{
    use InteractsWithMedia;
}

// Upload
$user->addMediaFromRequest('avatar')->toMediaCollection();

// Get URL in blade
$user->getFirstMediaUrl()                         // URL or empty string ""
$user->getFirstMediaUrl() ?: asset('default.png') // with fallback

// Eager load for a loop (avoid N+1)
User::with('media')->get();
Employee::with('user.media')->get();
```

### Null-safe Operators in Blade

```blade
{{-- ?? : fallback if left side is null --}}
{{ $employee->user->name ?? 'N/A' }}

{{-- ?-> : don't crash if object is null (PHP 8) --}}
{{ $employee->user?->getFirstMediaUrl() }}

{{-- Combined --}}
@php
    $url = $employee->user?->getFirstMediaUrl() ?: asset('default.png');
@endphp
```
