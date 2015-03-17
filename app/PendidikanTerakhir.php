<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PendidikanTerakhir extends Model {

	protected $table ='pendidikan_terakhir';
	protected $guarded =['id'];
	protected $fillable = [
		'id_pelamar',
		'institusi',
		'akreditas',
		'tahun_lulus',
		'tahun_masuk',
		'ipk',
		'jenjang'
	];

}
