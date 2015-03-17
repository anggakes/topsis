<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tertulis extends Model {

	protected $table ='tertulis';
	protected $guarded =['id'];
	protected $fillable = [
		'id_pelamar',
		'id_lowongan',
		'nilai_tertulis',
	];

}
