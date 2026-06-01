<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Designation;
use App\Models\Department;
use App\Models\Country;
use App\Models\Language;


class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'profile_picture',
        'designation_id',
        'department_id',
        'country_id',
        'mobile',
        'gender',
        'joining_date',
        'birth_date',
        'reporting_to',
        'language_id',
        'address',
        'about',
        'login_permission',
        'notification_permission',
        'hourly_rate',
        'slack_username',
        'skills',
        'timestamps',
    ];

    // User Relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Designation Relationship
    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    // Department Relationship
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // Country Relationship
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    // Language Relationship
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
