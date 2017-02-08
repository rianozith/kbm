<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table = 'gurus';
    protected $fillable = array('nama_guru','nohp_guru');
}
