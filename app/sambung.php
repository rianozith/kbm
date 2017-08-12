<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sambung extends Model
{
    protected $table = 'sambungs';
    protected $fillable = ['sambung_name', 'info'];

}
