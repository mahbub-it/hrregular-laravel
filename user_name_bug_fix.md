# Tutorial: Fixing the Employee Name Bug in Leave Management

This tutorial explains the step-by-step process used to identify and fix the bug where incorrect employee names (or the same name) were showing on the Leave List page.

## 1. The Immediate Error (Undefined Variable)
Initially, the page was crashing because it used an undefined variable `$users`.

*   **File**: `resources/views/admin/leaves/index.blade.php`
*   **Wrong Code (Line 68)**:
    ```php
    <td>{{ $users->name }}</td>
    ```
*   **The Problem**: The variable `$users` was never passed from the Controller.
*   **The Fix**: I changed it to use the relationship between the Leave and the Employee.
    ```php
    <td>{{ $leave->employee?->user?->name }}</td>
    ```

---

## 2. Setting up the Relationship
To make the fix above work, the `Leave` model needed to know it "belongs to" an `Employee`.

*   **File**: `app/Models/Leave.php`
*   **The Fix**: I added the `employee()` relationship.
    ```php
    public function employee() {
        return $this->belongsTo(Employee::class);
    }
    ```

---

## 3. The Root Cause (The Value Bug)
Even after fixing the display, all names showed "Delores Schimmel". I investigated and found that when creating a leave, the form was saving the **User ID** into the **Employee ID** column.

*   **File**: `resources/views/admin/leaves/create.blade.php`
*   **Wrong Code (Line 55)**:
    ```php
    <option value="{{ $employee->user->id }}">
    ```
*   **The Problem**: `employee->user->id` is the ID from the `users` table. The `leaves` table expects the ID from the `employees` table. Since they didn't match, the system was looking up the wrong employee for the name.
*   **The Fix**: I changed the value to use the Employee's own ID.
    ```php
    <option value="{{ $employee->id }}">
    ```

---

## 4. Relationship Correction (Foreign Key)
I noticed the `leaves` table uses `leave_id` instead of the Laravel default `leave_type_id`.

*   **File**: `app/Models/Leave.php`
*   **The Fix**: Explicitly told Laravel to use `leave_id` for the `leave_type` relationship.
    ```php
    public function leave_type() {
        return $this->belongsTo(LeaveType::class, 'leave_id');
    }
    ```

---

## 5. Performance Optimization (Eager Loading)
To prevent the application from slowing down when you have many leaves, I optimized the Controller.

*   **File**: `app/Http/Controllers/Admin/LeaveController.php`
*   **The Fix (Line 18)**:
    ```php
    // Before:
    $leaves = Leave::paginate(10);
    
    // After (Eager Loading):
    $leaves = Leave::with(['employee.user', 'leave_type'])->paginate(10);
    ```

---

## 6. Repairing the Existing Data
Since many records were already saved with the wrong IDs, I ran a background script to map the old data correctly.
*   It looked at the `employee_id` (which was actually a `user_id`).
*   It found the real `Employee record` for that user.
*   It updated the `leave record` with the correct `employee_id`.

---

### Summary of what you learned:
1.  **Always check ID mapping**: An `employee_id` is different from a `user_id`.
2.  **Use Null-safe operators**: `{{ $leave->employee?->user?->name }}` prevents the page from crashing if data is missing.
3.  **Eager Loading**: Use `with()` in your Controller to make your app faster.
