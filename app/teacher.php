<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $table = 'teachers';
    protected $fillable= array( 'name', 'teacherdetail_id',);

}
