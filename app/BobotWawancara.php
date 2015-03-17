<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BobotWawancara extends Model {

	protected $table ='bobot_wawancara';
	protected $guarded =['id'];
	protected $fillable = [
		'id_lowongan',
		'wa1',
		'wa2',
		'wa3',
		'wa4',
		'wa5',
		'wa6',
	];

}
