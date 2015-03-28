<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Psikotes extends Model {

	protected $table ='psikotes';
	protected $guarded =['id'];
	protected $fillable = [
		'id_lamaran',
		'nilai_psikotes',
	];

	public function lamaran(){

		return $this->belongsTo('App\Lamaran','id_lamaran');
	
	}

}
