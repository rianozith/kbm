<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelompok extends Model
{
    protected $table = 'kelompoks';
    protected $fillable = ['nama_kelompok', 'keterangan'];
}
