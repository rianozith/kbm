<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher_detail extends Model
{
    protected $table  = 'teacher_details';
    protected $fillable = array('age', 'address', 'sambung_id', 'phone', 'status',);
}
