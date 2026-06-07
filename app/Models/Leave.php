<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Leave extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function leave_type()
    {
        return $this->belongsTo(LeaveType::class, 'leave_id');
    }

}