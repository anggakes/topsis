<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Psikotes extends Model {

	protected $table ='psikotes';
	protected $guarded =['id'];
	protected $fillable = [
		'id_pelamar',
		'id_lowongan',
		'nilai_psikotes',
	];


}
