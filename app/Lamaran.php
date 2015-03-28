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

	public function administrasi(){
		return $this->hasOne('App\Administrasi','id_lamaran');
	}

	/*
	|	Menampilkan pelamar yang lulus Administrasi
	| 	Kuota 0 jika tidak ada batasan kuota
	*/
	public function lulusAdministrasi($id_lowongan,$kuota = 0){ 

		$lulus = DB::table('lamaran')
		->join('pelamar','pelamar.id','=','lamaran.id_pelamar')
		->join('administrasi','lamaran.id','=','administrasi.id_lamaran')
		->select('administrasi.nilai_topsis','pelamar.nama','lamaran.nomor_pelamar','lamaran.id','pelamar.tanggal_lahir')
		->where('lamaran.id_lowongan','=',$id_lowongan)
		->orderBy('administrasi.nilai_topsis','desc');

		if($kuota>0){
			$lulus = $lulus->take($kuota); // dibatasin kuota administrasi !!
		}
		
		return $lulus->get();
	}

	public function lulusPsikotes($id_lowongan,$kuota = 0,$nilai_minimum = 0){
		
		$lulus = DB::table('lamaran')
		->join('pelamar','pelamar.id','=','lamaran.id_pelamar')
		->join('psikotes','lamaran.id','=','psikotes.id_lamaran')
		->select('psikotes.nilai_psikotes','pelamar.nama','lamaran.nomor_pelamar','lamaran.id','pelamar.tanggal_lahir')
		->where('lamaran.id_lowongan','=',$id_lowongan)
		->orderBy('psikotes.nilai_psikotes','desc');
		
		if($kuota>0 OR $nilai_minimum>0){
			$lulus = $lulus->where('nilai_psikotes','>=',$nilai_minimum)
					->take($kuota);
		}
		
		return $lulus->get();

	}

	public function lulusTertulis($id_lowongan,$kuota = 0,$nilai_minimum = 0){
		
		$lulus = DB::table('lamaran')
		->join('pelamar','pelamar.id','=','lamaran.id_pelamar')
		->join('tertulis','lamaran.id','=','tertulis.id_lamaran')
		->select('tertulis.nilai_tertulis','pelamar.nama','lamaran.nomor_pelamar','lamaran.id','pelamar.tanggal_lahir')
		->where('lamaran.id_lowongan','=',$id_lowongan)
		->orderBy('tertulis.nilai_tertulis','desc');
		
		if($kuota>0 OR $nilai_minimum>0){
			$lulus = $lulus->where('nilai_tertulis','>=',$nilai_minimum)
					->take($kuota);
		}
		
		return $lulus->get();

	}

	
	
}
