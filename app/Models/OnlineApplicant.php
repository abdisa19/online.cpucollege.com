<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineApplicant extends Model
{
    use HasFactory;
    protected $table = 'table_online_application';
    protected $fillable = [
        'firstName',
        'secondName',
        'lastName',
        'sex',
        'dateOfBirth',
        'nationality',
        'country',
        'city',
        'email',
        'mobile',
        'current_education_level',
        'current_education_department',
        'applying_program',
        'applying_department',
        'applying_enrollment',
        'department',
        'program',
        'agrement',
        'modality',
    ];
    protected $guarded = [];
}
