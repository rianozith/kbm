<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    protected $table => 'ruangans';
    protected $fillable => ['lokasi_ruangan'];
}
