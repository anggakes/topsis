<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model {

	protected $table ='administrasi';
	protected $guarded =['id'];
	protected $fillable = [
		'id_pelamar',
		'id_lowongan',
		'nilai_topsis',
	];

}
