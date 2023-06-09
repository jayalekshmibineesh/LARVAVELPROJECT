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
            'doctor_id',
            'email',
            'place',
            'contact',
            'gender',
            'age',
            'image',
            'staff_id'
    ];
    protected $primaryKey='patient_id';

















    
}
