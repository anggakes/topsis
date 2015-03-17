<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Wawancara extends Model {

	protected $table ='wawancara';
	protected $guarded =['id'];
	protected $fillable = [
		'id_pelamar',
		'id_lowongan',
		'wa1',
		'wa2',
		'wa3',
		'wa4',
		'nilai_topsis',
	];

}
