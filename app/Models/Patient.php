<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable=[
            'patient_name',
            'department',
            'doctor_name',
            'date',
            'time',
            'email',
            'place',
            'contact',
            'gender',
            'age',
            'staff_id',
    ];
    protected $primaryKey='patient_id';

















    
}
