<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class murid extends Model
{
    protected $table = 'murids';
    protected $fillable = array('nama_murid',
								'umur_murid',
								'gender',
								'alamat_murid',
								'nohp_murid',
								'kelas_id');
    
	
}
	