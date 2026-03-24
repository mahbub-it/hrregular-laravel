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

- php artisan make:migration create_holidays_table
- $table->id();
            $table->string('holiday_name');
            $table->string('holiday_date');
            $table->string('holiday_type');
            $table->string('holiday_description');
            $table->timestamps();

- php artisan migrate

- php artisan make:migration create_attendances_table

- php artisan make:controller AdminController


# 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Signup Form</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="container">
    <div class="curved-shape"></div>
    <div class="image-custom">
      <div class="curved-shape2"></div>
      <div class="form-box Login">
        <h2 class="animation" style="--D:0; --S:21">Login</h2>
        <form action="#">
          <div class="input-box animation" style="--D:1; --S:22">
            <input type="text" required>
            <label for="">Username</label>
            <box-icon type='solid' name='user'></box-icon>
          </div>

          <div class="input-box animation" style="--D:2; --S:23">
            <input type="password" required>
            <label for="">Password</label>
            <box-icon name='lock-alt' type='solid'></box-icon>
          </div>

          <div class="input-box animation" style="--D:3; --S:24">
            <button class="btn" type="submit">Login</button>
          </div>

          <div class="regi-link animation" style="--D:4; --S:25">
            <p>Don't have an account? <br> <a href="#" class="SignUpLink">Sign Up</a></p>
          </div>
        </form>
      </div>

      <div class="info-content Login">
        <h2 class="animation" style="--D:0; --S:20">WELCOME BACK!</h2>
        <p class="animation" style="--D:1; --S:21">We are happy to have you with us again. If you need anything, we are here to help.</p>
      </div>

      <div class="form-box Register">
        <h2 class="animation" style="--li:17; --S:0">Register</h2>
        <form action="#">
          <div class="input-box animation" style="--li:18; --S:1">
            <input type="text" required>
            <label for="">Username</label>
            <box-icon type='solid' name='user'></box-icon>
          </div>

          <div class="input-box animation" style="--li:19; --S:2">
            <input type="email" required>
            <label for="">Email</label>
            <box-icon name='envelope' type='solid'></box-icon>
          </div>

          <div class="input-box animation" style="--li:19; --S:3">
            <input type="password" required>
            <label for="">Password</label>
            <box-icon name='lock-alt' type='solid'></box-icon>
          </div>

          <div class="input-box animation" style="--li:20; --S:4">
            <button class="btn" type="submit">Register</button>
          </div>

          <div class="regi-link animation" style="--li:21; --S:5">
            <p>Don't have an account? <br> <a href="#" class="SignInLink">Sign In</a></p>
          </div>
        </form>
      </div>

      <div class="info-content Register">
        <h2 class="animation" style="--li:17; --S:0">WELCOME!</h2>
        <p class="animation" style="--li:18; --S:1">We’re delighted to have you here. If you need any assistance, feel free to reach out.</p>
      </div>

    </div>
  </div>
  <script src="index.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</body>

</html>

<!-- Style -->
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    color: #fff;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #25252b;
}

.container{
    position: relative;
    width: 750px;
    height: 450px;
    overflow: hidden;
  background: rgba(0,0,0,0.75);
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-inline: 32px;
    overflow: hidden;
}

.container::before{
    content: "";
    position: absolute;
    width: 750px;
    height: 450px;
    background: conic-gradient(transparent, transparent, transparent, #ff2770);
    animation: animate 4s linear infinite;
    animation-delay: -2s;
}

.container::after{
    content: "";
    position: absolute;
    width: 750px;
    height: 450px;
    background: conic-gradient(transparent, transparent, transparent, hsl(139.41deg 58.62% 54.51%));
    animation: animate 4s linear infinite;
}

@keyframes animate{
    0%{
        transform: rotate(0);
    }
    100%{
        transform: rotate(360deg);
    }
}

.image-custom{
    position: absolute;
    inset: 2px;
    background-color: #0c1022;
    z-index: 1;
    border-radius: 16px;
}


.container .form-box{
    position: absolute;
    top: 0;
    width: 50%;
    height: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.form-box.Login{
    left: 0;
    padding: 0 40px;
}

.form-box.Login .animation{
    transform: translateX(0%);
    transition: .7s;
    opacity: 1;
    transition-delay: calc(.1s * var(--S));
}

.container.active .form-box.Login .animation{
    transform: translateX(-120%);
    opacity: 0;
    transition-delay: calc(.1s * var(--D));
}

.form-box.Register{
    /* display: none; */
    right: 0;
    padding: 0 60px;
}

.form-box.Register .animation{
    transform: translateX(120%);
    transition: .7s ease;
    opacity: 0;
    transition-delay: calc(.1s * var(--S));
}

.container.active .form-box.Register .animation{
    transform: translateX(0%);
    opacity: 1;
    transition-delay: calc(.1s * var(--li));
}

.form-box h2{
    font-size: 32px;
    text-align: center;
}

.form-box .input-box{
    position: relative;
    width: 100%;
    height: 50px;
    margin-top: 25px;
}

.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 16px;
    color: #fff;
    font-weight: 600;
    border-bottom: 2px solid #fff;
    padding-right: 23px;
    transition: .5s;
}

.input-box input:focus,
.input-box input:valid{
    border-bottom: 2px solid #ff2770;
}

.input-box label{
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 16px;
    color: #fff;
    transition: .5s;
}

.input-box input:focus ~ label,
.input-box input:valid ~ label{
    top: -5px;
    color: #ff2770;
}

.input-box box-icon{
    position: absolute;
    top: 50%;
    right: 0;
    font-size: 18px;
    transform: translateY(-50%);
    color: #fff;
}

.input-box input:focus ~ box-icon,
.input-box input:valid ~ box-icon{
    color: #ff2770;
}

.btn{
    position: relative;
    width: 100%;
    height: 45px;
    background: transparent;
    border-radius: 40px;
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
    border: 2px solid #ff2770;
    overflow: hidden;
    z-index: 1;    
}

.btn::before{
    content: "";
    position: absolute;
    height: 300%;
    width: 100%;
    background: linear-gradient(#25252b, #ff2770, #25252b, #ff2770);
    top: -100%;
    left: 0;
    z-index: -1;
    transition: .5s;
}

.btn:hover:before{
    top: 0;
}

.regi-link{
    font-size: 14px;
    text-align: center;
    margin: 20px 0 10px;
}

.regi-link a{
    text-decoration: none;
    color: #ff2770;
    font-weight: 600;
}

.regi-link a:hover{
    text-decoration: underline;
}

.info-content{
    position: absolute;
    top: 0;
    height: 100%;
    width: 50%;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.info-content.Login{
    right: 0;
    text-align: right;
    padding: 0 40px 60px 150px;
}

.info-content.Login .animation{
    transform: translateX(0);
    transition: .7s ease;
    transition-delay: calc(.1s * var(--S));
    opacity: 1;
}

.container.active .info-content.Login .animation{
    transform: translateX(120%);
    opacity: 0;
    transition-delay: calc(.1s * var(--D));
}

.info-content.Register{
    /* display: none; */
    left: 0;
    text-align: left;
    padding: 0 150px 60px 38px;
    pointer-events: none;
}

.info-content.Register .animation{
    transform: translateX(-120%);
    transition: .7s ease;
    opacity: 0;
    filter: blur(10PX);
    transition-delay: calc(.1s * var(--S));
}

.container.active .info-content.Register .animation{
    transform: translateX(0%);
    opacity: 1;
    filter: blur(0);
    transition-delay: calc(.1s * var(--li));
}

.info-content h2{
    text-transform: uppercase;
    font-size: 36px;
    line-height: 1.3;
}

.info-content p{
    font-size: 16px;
}

<!-- js -->
const container = document.querySelector('.container');
const LoginLink = document.querySelector('.SignInLink');
const RegisterLink = document.querySelector('.SignUpLink');

RegisterLink.addEventListener('click', () =>{
    container.classList.add('active');
})

LoginLink.addEventListener('click', () => {
    container.classList.remove('active');
})

#

# Code
- php artisan make:controller AuthController
- php artisan make:controller EmployeeController --resource
- php artisan make:seeder UserSeeder
- php artisan make:seeder EmployeeSeeder
- php artisan make:model Employee
- php artisan make:factory EmployeeFactory
- php artisan migrate:fresh --seed