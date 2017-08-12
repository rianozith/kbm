<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class presence extends Model
{
    protected $table  = 'presences';
    protected $fillable = array('id', 'student_id', 'presence', 'info', 'date',);
}
