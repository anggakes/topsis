<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Lamaran extends Model {

	protected $table ='lamaran';
	protected $guarded =['id'];
	protected $fillable = [
		'id_pelamar',
		'nomor_pelamar',
		'id_lowongan',
	];

	public function makeNomorPelamar($id_lowongan){
		$id = DB::table($this->table)->max('id')+1;
		$prefix = 'NK';
		$th = date('y');
		return "$prefix-$id_lowongan-$th-$id";
	}

	public function pelamar(){
		return $this->belongsTo('App\Pelamar','id_pelamar');
	}

	
}
