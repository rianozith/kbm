<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
	protected $table = 'kelas';
    protected $fillable= array( 'nama_kelas', 'kapasitas', 'prodi_id', );

    public function guru(){
    	// return $this->hasOne('App\guru');
    }

}
