# Code
- composer create-project laravel/laravel hrregular
- cd hrregular
- php artisan key:generate
- php artisan config:cache
- php artisan route:cache
- php artisan view:cache
- php artisan optimize:clear
- php artisan migrate
- php artisan serve
- composer require laravel/breeze --dev
- php artisan breeze:install
- npm install
- npm run dev
- php artisan install:api
- php artisan migrate
- composer require laravel/sanctum
- php artisan make:migration create_employees_table

- public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name');
            $table->string('profile_picture')->nullable();
            $table->foreignId('designation_id');
            $table->foreignId('department_id');
            $table->foreignId('country_id')->nullable();
            $table->string('mobile')->nullable();
            $table->string('gender')->nullable();
            $table->date('joining_date');
            $table->date('birth_date')->nullable();
            $table->foreignId('reporting_to')->nullable();
            $table->foreignId('language_id')->nullable();
            $table->string('address')->nullable();
            $table->string('about')->nullable();
            $table->boolean('login_permission')->nullable();
            $table->boolean('notification_permission')->nullable();
            $table->double('hourly_rate')->nullable();
            $table->string('slack_username')->nullable();
            $table->string('skills')->nullable();
            $table->timestamps();
        });
    }
- php artisan migrate
- php artisan make:migration create_designations_table
-  public function up(): void
    {
        Schema::create('designations', function (Blueprint $table) {
            $table->id();
            $table->string('designation_name');
            $table->integer('parent_id');
            $table->timestamps();
        });
    }
- php artisan migrate
- php artisan make:migration create_depertments_table
- $table->id();
            $table->string('department_name');
            $table->integer('parent_id');
            $table->timestamps();
- php artisan migrate

- php artisan make:migration create_countries_table
- $table->id();
            $table->string('country_name');
            $table->string('flag_img');
            $table->timestamps();

- php artisan make:migration create_languages_table
- $table->id();
            $table->string('language_name');
            $table->integer('country_id');
            $table->timestamps();

- php artisan make:migration create_leaves_table
- $table->id();
            $table->foreignId('employee_id');
            $table->foreignId('leave_id');
            $table->string('status')->nullable();
            $table->string('duration')->nullable();
            $table->string('duration_dates')->nullable();
            $table->string('reason');
            $table->timestamps();

- php artisan make:migration create_leave_types_table
-  $table->id();
            $table->string('type_name');
            $table->string('status');
            $table->integer('maximum_leave');
            $table->integer('monthly_limit');
            $table->string('color_code');
            $table->boolean('assign_to_all');
            $table->timestamps();

- php artisan make:migration create_shift_rosters_table
- $table->id();
            $table->foreignId('department_id');
            $table->foreignId('employee_id');
            $table->foreignId('shift_id');
            $table->string('shift_by');
            $table->string('start_dates');
            $table->boolean('email_permission');
            $table->boolean('notification_permission');
            $table->date('end_date');
            $table->timestamps();

- php artisan make:migration create_attendances_table
- $table->id();
            $table->foreignId('department_id');
            $table->foreignId('employee_id');
            $table->string('location');
            $table->string('attendance_by');
            $table->string('year');
            $table->string('month');
            $table->string('clock_in_time');
            $table->string('clock_out_time');
            $table->boolean('late');
            $table->boolean('half_day');
            $table->string('work_from');
            $table->timestamps();

- php artisan make:migration create_holidays_table
- $table->id();
            $table->string('holiday_name');
            $table->string('holiday_date');
            $table->string('holiday_type');
            $table->string('holiday_description');
            $table->timestamps();

- php artisan migrate

# 