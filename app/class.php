<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class class extends Model
{
    protected $table = 'classes';
    protected $fillable= array( 'class_name', 'teacher_id', 'presence_id', );
}
