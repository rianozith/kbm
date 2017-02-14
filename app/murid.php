<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class murid extends Model
{
    protected $table = 'murids';
    protected $fillable = array('nama_murid',
								'umur_murid',
								'alamat_murid',
								'nohp_murid',
								'kelas_murid',
								'kegiatan_id');
}
