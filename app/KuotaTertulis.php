<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class KuotaTertulis extends Model {

	protected $table ='kuota_tertulis';
	protected $guarded =['id'];
	protected $fillable = [
		'id_lowongan',
		'kuota',
		'nilai_minimum',
	];

}
