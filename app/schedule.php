<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $table  = 'schedules';
    protected $fillable = array('day', 'date', 'time', 'studyprogram_id', 'subjects_id',);
}
