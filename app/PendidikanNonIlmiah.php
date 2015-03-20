<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PendidikanNonIlmiah extends Model {

	protected $table ='pendidikan_non_ilmiah';
	protected $guarded =['id'];
	protected $fillable = [
		'nama',
		'instansi',
		'id_pelamar',
		'tgl_masuk',
		'tgl_keluar'	
	];
	//

}
