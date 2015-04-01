<?php namespace App\Http\Controllers\administrasi;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\Lamaran;
use App\BobotAdministrasi;
use App\Administrasi;
use App\Library\Topsis\Topsis;
use App\Library\Convert\ConvertAdministrasi;

class StepByStepAdministrasiController extends Controller {

	

	public function getAlternatif($id_lowongan){

		$lamaran = Lamaran::where('id_lowongan', '=', $id_lowongan)->get();

			$aa = new ConvertAdministrasi($lamaran);

			$alt = $aa->make();

			$kriteria=['KA1','KA2','KA3','KA4'];
			
			return view('stepbystep.alternatif')
				->with('alt',$alt)
				->with('kriteria',$kriteria)
				->with('id_lowongan',$id_lowongan)
				->with('tahap','Administrasi')
				->with('lamaran',$lamaran)
				->with('next','adm.sbs.kuadrathasilakar');			
	}

	public function getKuadratHasilAkar($id_lowongan){
			
			$lamaran = Lamaran::where('id_lowongan', '=', $id_lowongan)->get();

			$aa = new ConvertAdministrasi($lamaran);

			$alt = $aa->make();

			$kriteria=['KA1','KA2','KA3','KA4'];
			
			$b = BobotAdministrasi::where('id_lowongan','=',$id_lowongan)->first();

			$bobot = [$b->ka1,$b->ka2,$b->ka3,$b->ka4];
			
			$topsis = new Topsis($kriteria,$alt,$bobot);

			$nilai_topsis = $topsis->kuadratHasilAkar();

			return view('stepbystep.kuadrat_hasil_akar')
				->with('nilai_topsis',$nilai_topsis)
				->with('kriteria',$kriteria)
				->with('id_lowongan',$id_lowongan)
				->with('tahap','Administrasi')
				->with('lamaran',$lamaran)
				->with('next','adm.sbs.matriknormalisasi');		

	}

	public function getMatrikNormalisasi($id_lowongan){

			$lamaran = Lamaran::where('id_lowongan', '=', $id_lowongan)->get();

			$aa = new ConvertAdministrasi($lamaran);

			$alt = $aa->make();

			$kriteria=['KA1','KA2','KA3','KA4'];
			
			$b = BobotAdministrasi::where('id_lowongan','=',$id_lowongan)->first();

			$bobot = [$b->ka1,$b->ka2,$b->ka3,$b->ka4];
			
			$topsis = new Topsis($kriteria,$alt,$bobot);

			$nilai_topsis = $topsis->matrikNormalisasi();

			return view('stepbystep.matrik_normalisasi')
				->with('nilai_topsis',$nilai_topsis)
				->with('kriteria',$kriteria)
				->with('id_lowongan',$id_lowongan)
				->with('tahap','Administrasi')
				->with('lamaran',$lamaran)
				->with('next','adm.sbs.matriknormalisasibobot');	
	}

	public function getMatrikNormalisasiBobot($id_lowongan){

			$lamaran = Lamaran::where('id_lowongan', '=', $id_lowongan)->get();

			$aa = new ConvertAdministrasi($lamaran);

			$alt = $aa->make();

			$kriteria=['KA1','KA2','KA3','KA4'];
			
			$b = BobotAdministrasi::where('id_lowongan','=',$id_lowongan)->first();

			$bobot = [$b->ka1,$b->ka2,$b->ka3,$b->ka4];
			
			$topsis = new Topsis($kriteria,$alt,$bobot);

			$nilai_topsis = $topsis->matrikNormalisasiBobot();

			return view('stepbystep.matrik_normalisasi_bobot')
				->with('nilai_topsis',$nilai_topsis)
				->with('kriteria',$kriteria)
				->with('id_lowongan',$id_lowongan)
				->with('tahap','Administrasi')
				->with('lamaran',$lamaran)
				->with('next','adm.sbs.solusiideal');	
	}

	public function getSolusiIdeal($id_lowongan){
		
		$lamaran = Lamaran::where('id_lowongan', '=', $id_lowongan)->get();

			$aa = new ConvertAdministrasi($lamaran);

			$alt = $aa->make();

			$kriteria=['KA1','KA2','KA3','KA4'];
			
			$b = BobotAdministrasi::where('id_lowongan','=',$id_lowongan)->first();

			$bobot = [$b->ka1,$b->ka2,$b->ka3,$b->ka4];
			
			$topsis = new Topsis($kriteria,$alt,$bobot);

			$sol = $topsis->solusiIdeal();

			return view('stepbystep.solusi_ideal')
				->with('sol',$sol)
				->with('kriteria',$kriteria)
				->with('id_lowongan',$id_lowongan)
				->with('tahap','Administrasi')
				->with('lamaran',$lamaran)
				->with('next','adm.sbs.matriknormalisasibobotsolusiideal');
	}

	public function getMatrikNormalisasiBobotSolusiIdeal($id_lowongan){

			$lamaran = Lamaran::where('id_lowongan', '=', $id_lowongan)->get();

			$aa = new ConvertAdministrasi($lamaran);

			$alt = $aa->make();

			$kriteria=['KA1','KA2','KA3','KA4'];
			
			$b = BobotAdministrasi::where('id_lowongan','=',$id_lowongan)->first();

			$bobot = [$b->ka1,$b->ka2,$b->ka3,$b->ka4];
			
			$topsis = new Topsis($kriteria,$alt,$bobot);

			$solpos = $topsis->setSolusiIdeal('positif')->matrikNormalisasiBobotSolusiIdeal();
			$solneg = $topsis->setSolusiIdeal('negatif')->matrikNormalisasiBobotSolusiIdeal();

			return view('stepbystep.matrik_normalisasi_bobot_solusi_ideal')
				->with('solpos',$solpos)
				->with('solneg',$solneg)
				->with('kriteria',$kriteria)
				->with('id_lowongan',$id_lowongan)
				->with('tahap','Administrasi')
				->with('lamaran',$lamaran)
				->with('next','adm.sbs.jarakalternatif');
	}

	public function getJarakAlternatif($id_lowongan){

			$lamaran = Lamaran::where('id_lowongan', '=', $id_lowongan)->get();

			$aa = new ConvertAdministrasi($lamaran);

			$alt = $aa->make();

			$kriteria=['D1','D2','D3','D4'];
			
			$b = BobotAdministrasi::where('id_lowongan','=',$id_lowongan)->first();

			$bobot = [$b->ka1,$b->ka2,$b->ka3,$b->ka4];
			
			$topsis = new Topsis($kriteria,$alt,$bobot);

			$solpos = $topsis->setSolusiIdeal('positif')->jarakAlternatif();
			$solneg = $topsis->setSolusiIdeal('negatif')->jarakAlternatif();

			return view('stepbystep.jarak_alternatif')
				->with('solpos',$solpos)
				->with('solneg',$solneg)
				->with('kriteria',$kriteria)
				->with('id_lowongan',$id_lowongan)
				->with('tahap','Administrasi')
				->with('lamaran',$lamaran)
				->with('next','adm.get.hasil');
	}


}
