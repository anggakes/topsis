<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PengalamanKerja extends Model {

	protected $table ='pengalaman_kerja';
	protected $guarded =['id'];
	protected $fillable = [
		'jabatan',
		'instansi',
		'id_pelamar',
		'tgl_masuk',
		'tgl_keluar'	
	];
	//

}
