<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class KuotaPsikotes extends Model {

	protected $table ='kuota_psikotes';
	protected $guarded =['id'];
	protected $fillable = [
		'id_lowongan',
		'kuota',
		'nilai_minimum',
	];
}
