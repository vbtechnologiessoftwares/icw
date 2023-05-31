<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Helth extends Model
{
    use HasFactory;
    protected $fillable = ['relationship_to_applicant', 'first_name', 'last_name', 'medical_condition','height', 'weight', 'dob', 'gender', 'student', 'any_ongoing_medical_treatment', 'current_coverage_type', 'current_insurance_company', 'expiration_date','email','email','email','email', 'insured_since', 'other'];
}
