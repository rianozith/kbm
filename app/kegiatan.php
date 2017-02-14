<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
    protected $table = 'kegiatans';
    protected $fillable = array('nama_kegiatan',
								'tanggal_kegiatan',
								'jam_kegiatan',
								'tempat_kegiatan');
}
