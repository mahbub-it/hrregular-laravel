<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    // public function department()
    // {
    //     return $this->hasOne(Department::class, 'id', 'department_id');
    // }
}
