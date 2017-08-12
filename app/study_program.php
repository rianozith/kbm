<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class study_program extends Model
{
    protected $table  = 'study_programs';
    protected $fillable = array('program_name', 'info');
}
