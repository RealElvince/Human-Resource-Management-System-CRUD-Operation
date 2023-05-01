<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable=[
        'start_date','payrollNo','employee_name',
        'employee_email','employee_phone','department',
        'nssf','nhif','monthly_allowance','gross_salary',
        'leave_balance','id_number'
    ];

}
