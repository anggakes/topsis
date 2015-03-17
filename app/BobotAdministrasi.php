<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BobotAdministrasi extends Model {

	protected $table ='bobot_administrasi';
	protected $guarded =['id'];
	protected $fillable = [
		'id_lowongan',
		'ka1',
		'ka2',
		'ka3',
		'ka4',
	];

}
