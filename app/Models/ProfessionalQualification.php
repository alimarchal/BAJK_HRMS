<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalQualification extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'qualification_type',
        'institute_name',
        'date_from',
        'date_to',
        'attachment',
    ];
}
