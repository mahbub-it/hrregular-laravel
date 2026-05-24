# 👤 User Role Feature — Developer Tutorial

A beginner-friendly, step-by-step guide explaining how the **User Role** feature works in this Laravel HR project.

---

## 📖 What Is a "User Role"?

A **role** tells the system **what kind of user** someone is. In this project we have two roles:

| Role | Description |
|---|---|
| `employee` | A regular staff member |
| `administrator` | A person who can manage the system |

The selected role is stored in the `users` database table so we can later use it to control what each user can see or do.

---

## 🗂️ Files Involved

```
hrregular-laravel/
├── database/
│   └── migrations/
│       └── 2026_05_24_120900_add_role_to_users_table.php  ← Step 1: DB column
├── app/
│   ├── Models/
│   │   └── User.php                                        ← Step 2: Model
│   └── Http/Controllers/
│       └── UserController.php                              ← Step 3: Controller
└── resources/views/admin/users/
    └── create-user.blade.php                               ← Step 4: View (HTML form)
```

---

## 🧩 Step 1 — The Database Migration

**File:** `database/migrations/2026_05_24_120900_add_role_to_users_table.php`

A **migration** is like a version-controlled change to your database. Think of it as a recipe that Laravel runs to alter your database tables.

```php
public function up(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('role')->default('employee')->after('password');
    });
}
```

### What this does:
- `Schema::table('users', ...)` → Opens the existing `users` table to modify it.
- `$table->string('role')` → Adds a new column called `role` that holds text (a string).
- `->default('employee')` → If no role is given, it automatically sets `employee` as the value.
- `->after('password')` → Places the column right after the `password` column (cosmetic, for organization).

### How to run it:
```bash
php artisan migrate
```

> 💡 **Think of it this way:** The migration is creating a new "box" in your database table to store each user's role.

---

## 🧩 Step 2 — The User Model

**File:** `app/Models/User.php`

A **Model** in Laravel is a PHP class that represents a database table. It handles reading from and writing to the `users` table.

```php
protected $fillable = [
    'name',
    'email',
    'password',
    'role',   // ← we added this
];
```

### What is `$fillable`?
`$fillable` is a security list. Laravel only allows you to save data for columns that are listed here. This protects against **mass-assignment attacks** (hackers trying to insert unexpected fields).

By adding `'role'` to `$fillable`, we are saying:
> "Yes, it's safe to save the `role` field from form input."

> 💡 **Think of it this way:** The `$fillable` list is a whitelist — only approved fields pass through.

---

## 🧩 Step 3 — The Controller

**File:** `app/Http/Controllers/UserController.php`

The **Controller** is the brain of the operation. It receives the form data, validates it, and saves it to the database.

### The `store()` method (handles form submission):

```php
public function store(Request $request)
{
    // 1. Validate the incoming data
    $request->validate([
        'name'            => 'required',
        'email'           => 'required|email|unique:users',
        'password'        => 'required|min:6|confirmed',
        'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg',
        'role'            => 'required|in:employee,administrator', // ← new
    ]);

    // 2. Create and save the user
    $user = new User();
    $user->name     = $request->name;
    $user->email    = $request->email;
    $user->password = $request->password;
    $user->role     = $request->role;   // ← new
    $user->save();

    // 3. Redirect with success message
    return redirect()->route('admin.users.create')->with('success', 'User created successfully');
}
```

### Understanding the validation rules:

| Rule | Meaning |
|---|---|
| `required` | The field must not be empty |
| `email` | Must be a valid email format |
| `unique:users` | The email must not already exist in the `users` table |
| `min:6` | Password must be at least 6 characters |
| `confirmed` | There must be a matching `password_confirmation` field |
| `nullable` | The field is optional (can be empty) |
| `in:employee,administrator` | The value must be **exactly** one of these two |

> 💡 **Think of it this way:** Validation is a bouncer at the door — only correctly-formed data gets into the database.

---

## 🧩 Step 4 — The Blade View (HTML Form)

**File:** `resources/views/admin/users/create-user.blade.php`

The **View** is what the user sees in the browser — the HTML form. **Blade** is Laravel's templating engine that lets you use PHP logic inside HTML.

### The Role Dropdown:

```html
<div class="mb-3">
    <label for="userRole" class="form-label fs-6 fw-semibold">Select Role</label>

    <select class="form-select" id="userRole" name="role" aria-label="User Role">
        <option value="" disabled {{ old('role') ? '' : 'selected' }}>-- Select a Role --</option>
        <option value="employee"       {{ old('role') == 'employee'       ? 'selected' : '' }}>Employee</option>
        <option value="administrator"  {{ old('role') == 'administrator'  ? 'selected' : '' }}>Administrator</option>
    </select>
</div>
```

### Breaking it down:

#### `name="role"` ← The Most Important Part
Without `name="role"`, the form **never sends the selected value** to the server. This was the original bug — the `<select>` was missing its `name` attribute entirely.

> 💡 **Think of it this way:** A form field without a `name` is like a letter with no address — it goes nowhere.

#### `old('role')`
`old()` is a Laravel helper that remembers what the user previously typed. If validation fails (e.g., they forgot to fill in the name), the form is shown again — and `old('role')` re-selects the role they had already chosen, so they don't have to pick it again.

```php
old('role') == 'employee' ? 'selected' : ''
// If the previously submitted value was 'employee', add the 'selected' attribute
```

#### `{{ ... }}` — Blade Echo
Double curly braces print a PHP value as HTML-safe text.

```blade
{{ old('role') }}
{{-- This is a Blade comment (not shown in browser) --}}
```

---

## 🔄 The Full Request Lifecycle

Here's what happens when a user fills in the form and clicks **Create User**:

```
[Browser] User fills form and clicks Submit
    ↓
[HTTP POST request] Form data sent to server (including role=administrator)
    ↓
[routes/web.php] Route matches → sends to UserController@store
    ↓
[UserController::store()] Validates the data
    ↓  (fails?) → Redirect back with errors + old input
    ↓  (passes?) → Create User, save role to DB
    ↓
[Database] users table: { name, email, password, role: 'administrator' }
    ↓
[Redirect] Back to create page with "User created successfully" message
```

---

## ✅ How to Verify It Works

### In the Browser:
1. Go to **Create User** page
2. Fill in name, email, password
3. Select **Administrator** from the role dropdown
4. Click **Create User**
5. You should see a green success message ✅

### In Tinker (Laravel's interactive shell):
```bash
php artisan tinker
```
```php
App\Models\User::latest()->first()->only(['name', 'email', 'role']);
// Expected: ['name' => '...', 'email' => '...', 'role' => 'administrator']
```

### Test Validation:
1. Submit the form **without** selecting a role
2. You should see an error: _"The role field is required."_ ✅

---

## 🧠 Key Concepts Summary

| Concept | Where | Purpose |
|---|---|---|
| **Migration** | `database/migrations/` | Add/modify database columns |
| **Model `$fillable`** | `app/Models/User.php` | Whitelist fields safe to save |
| **Validation** | `UserController::store()` | Ensure data is correct before saving |
| **`name` attribute** | Blade `<select>` | Tells the form what key to submit the value under |
| **`old()` helper** | Blade template | Re-populates fields after a validation failure |

---

## 🚀 What You Could Add Next

- **Display the role** in the user list table (`user-list.blade.php`)
- **Edit the role** in the edit user form (`edit-user.blade.php`)
- **Use the role for access control** — e.g., only `administrator` can access certain routes:
  ```php
  // In a middleware or route:
  if (auth()->user()->role !== 'administrator') {
      abort(403, 'Unauthorized');
  }
  ```

---

*Happy coding! 🎉 Everyone starts as a beginner — the best developers are just the ones who kept going.*
