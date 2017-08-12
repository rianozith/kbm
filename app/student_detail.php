<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_detail extends Model
{
    protected $table = 'student_details';
    protected $fillable= array( 'age', 'address', 'pob', 'dob', 'sambung_id', 'hobby', 'blood_type', 'phone', 'father_name', 'mother_name',);
}


