<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subjects extends Model
{
    protected $table  = 'subjects';
    protected $fillable = array('subjects_name', 'info');
}
