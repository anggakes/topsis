<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model {

	protected $table ='administrasi';
	protected $guarded =['id'];
	protected $fillable = [
		'id_pelamar',
		'nomor_pelamar',
		'id_lowongan',
	];

	public function makeNomorPelamar(){
		return "AKB48-UII";
	}

	
}
