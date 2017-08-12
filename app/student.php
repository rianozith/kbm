<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'students';
    protected $fillable= array( 'name', 'details_id', 'class_id', 'schedule_id', 'presence_id', 'study_program_id', );
}
