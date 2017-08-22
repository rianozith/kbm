<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_student extends Model
{
    $protected table = 'detail_students';
    $protected fillable= array('address', 'age', 'bod', 'pod', 'phone', 'father', 'mother', 'hobby', 'bloodtype', 'brothers', 'sambung_id',);
}
