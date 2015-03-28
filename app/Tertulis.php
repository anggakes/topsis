<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tertulis extends Model {

	protected $table ='tertulis';
	protected $guarded =['id'];
	protected $fillable = [
		'id_lamaran',
		'nilai_tertulis',
	];

	public function lamaran(){

		return $this->belongsTo('App\Lamaran','id_lamaran');
	
	}

}
