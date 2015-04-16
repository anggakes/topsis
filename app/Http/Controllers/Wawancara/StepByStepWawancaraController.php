<?php namespace App\Http\Controllers\Wawancara;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\Lamaran;
use App\BobotWawancara;
use App\Wawancara;
use App\Library\Topsis\Topsis;
use App\Library\Convert\ConvertWawancara;

class StepByStepWawancaraController extends Controller {

	

	public function getAlternatif($id_lowongan){

		$wawancara = Wawancara::whereHas('lamaran', function($q)use($id_lowongan)
						{
						    $q->where('id_lowongan', '=', $id_lowongan);

						})->get();

		$aa = new ConvertWawancara($wawancara);

			$alt = $aa->make();

			$kriteria=['WA1','WA2','WA3','WA4', 'WA5', 'WA6'];
			
			return view('stepbystep_wawancara.alternatif')
				->with('alt',$alt)
				->with('kriteria',$kriteria)
				->with('id_lowongan',$id_lowongan)
				->with('tahap','Wawancara')
				->with('lamaran',$wawancara)
				->with('next','wawancara.sbs.kuadrathasilakar');			
	}

	public function getKuadratHasilAkar($id_lowongan){
			
			
		$wawancara = Wawancara::whereHas('lamaran', function($q)use($id_lowongan)
						{
						    $q->where('id_lowongan', '=', $id_lowongan);

						})->get();

		$b = BobotWawancara::where('id_lowongan','=',$id_lowongan)->first();
		
		$kriteria=['WA1','WA2','WA3','WA4', 'WA5', 'WA6'];
		
			$aa = new ConvertWawancara($wawancara);

			$alt = $aa->make();
			
			$bobot = [$b->wa1,$b->wa2,$b->wa3,$b->wa4,$b->wa5,$b->wa6];
			
			$topsis = new Topsis($kriteria,$alt,$bobot);

			$nilai_topsis = $topsis->kuadratHasilAkar();

			return view('stepbystep_wawancara.kuadrat_hasil_akar')
				->with('nilai_topsis',$nilai_topsis)
				->with('kriteria',$kriteria)
				->with('id_lowongan',$id_lowongan)
				->with('tahap','Wawancara')
				->with('lamaran',$wawancara)
				->with('next','wawancara.sbs.matriknormalisasi');		

	}

	public function getMatrikNormalisasi($id_lowongan){
$wawancara = Wawancara::whereHas('lamaran', function($q)use($id_lowongan)
						{
						    $q->where('id_lowongan', '=', $id_lowongan);

						})->get();

		$b = BobotWawancara::where('id_lowongan','=',$id_lowongan)->first();
		
		$kriteria=['WA1','WA2','WA3','WA4', 'WA5', 'WA6'];
		
			$aa = new ConvertWawancara($wawancara);

			$alt = $aa->make();
			
			$bobot = [$b->wa1,$b->wa2,$b->wa3,$b->wa4,$b->wa5,$b->wa6];
			
			$topsis = new Topsis($kriteria,$alt,$bobot);

			$nilai_topsis = $topsis->matrikNormalisasi();

			return view('stepbystep_wawancara.matrik_normalisasi')
				->with('nilai_topsis',$nilai_topsis)
				->with('kriteria',$kriteria)
				->with('id_lowongan',$id_lowongan)
				->with('tahap','Wawancara')
				->with('lamaran',$wawancara)
				->with('next','wawancara.sbs.matriknormalisasibobot');	
	}

	public function getMatrikNormalisasiBobot($id_lowongan){

			$lamaran = Wawancara::whereHas('lamaran', function($q)use($id_lowongan)
						{
						    $q->where('id_lowongan', '=', $id_lowongan);

						})->get();

		$b = BobotWawancara::where('id_lowongan','=',$id_lowongan)->first();
		
		$kriteria=['WA1','WA2','WA3','WA4', 'WA5', 'WA6'];
		
			$aa = new ConvertWawancara($lamaran);

			$alt = $aa->make();
			
			$bobot = [$b->wa1,$b->wa2,$b->wa3,$b->wa4,$b->wa5,$b->wa6];
			
			$topsis = new Topsis($kriteria,$alt,$bobot);

			$nilai_topsis = $topsis->matrikNormalisasiBobot();

			return view('stepbystep_wawancara.matrik_normalisasi_bobot')
				->with('nilai_topsis',$nilai_topsis)
				->with('kriteria',$kriteria)
				->with('id_lowongan',$id_lowongan)
				->with('tahap','Wawancara')
				->with('lamaran',$lamaran)
				->with('next','wawancara.sbs.solusiideal');	
	}

	public function getSolusiIdeal($id_lowongan){
		
		$lamaran = Wawancara::whereHas('lamaran', function($q)use($id_lowongan)
						{
						    $q->where('id_lowongan', '=', $id_lowongan);

						})->get();

		$b = BobotWawancara::where('id_lowongan','=',$id_lowongan)->first();
		
		$kriteria=['WA1','WA2','WA3','WA4', 'WA5', 'WA6'];
		
			$aa = new ConvertWawancara($lamaran);

			$alt = $aa->make();
			
			$bobot = [$b->wa1,$b->wa2,$b->wa3,$b->wa4,$b->wa5,$b->wa6];
			
			$topsis = new Topsis($kriteria,$alt,$bobot);

			$sol = $topsis->solusiIdeal();

			return view('stepbystep_wawancara.solusi_ideal')
				->with('sol',$sol)
				->with('kriteria',$kriteria)
				->with('id_lowongan',$id_lowongan)
				->with('tahap','Wawancara')
				->with('lamaran',$lamaran)
				->with('next','wawancara.sbs.matriknormalisasibobotsolusiideal');
	}

	public function getMatrikNormalisasiBobotSolusiIdeal($id_lowongan){

			$lamaran = Wawancara::whereHas('lamaran', function($q)use($id_lowongan)
						{
						    $q->where('id_lowongan', '=', $id_lowongan);

						})->get();

		$b = BobotWawancara::where('id_lowongan','=',$id_lowongan)->first();
		
		$kriteria=['WA1','WA2','WA3','WA4', 'WA5', 'WA6'];
		
			$aa = new ConvertWawancara($lamaran);

			$alt = $aa->make();
			
			$bobot = [$b->wa1,$b->wa2,$b->wa3,$b->wa4,$b->wa5,$b->wa6];
			
			$topsis = new Topsis($kriteria,$alt,$bobot);

			$solpos = $topsis->setSolusiIdeal('positif')->matrikNormalisasiBobotSolusiIdeal();
			$solneg = $topsis->setSolusiIdeal('negatif')->matrikNormalisasiBobotSolusiIdeal();

			return view('stepbystep_wawancara.matrik_normalisasi_bobot_solusi_ideal')
				->with('solpos',$solpos)
				->with('solneg',$solneg)
				->with('kriteria',$kriteria)
				->with('id_lowongan',$id_lowongan)
				->with('tahap','Wawancara')
				->with('lamaran',$lamaran)
				->with('next','wawancara.sbs.jarakalternatif');
	}

	public function getJarakAlternatif($id_lowongan){
$lamaran = Wawancara::whereHas('lamaran', function($q)use($id_lowongan)
						{
						    $q->where('id_lowongan', '=', $id_lowongan);

						})->get();

		$b = BobotWawancara::where('id_lowongan','=',$id_lowongan)->first();
		
		$kriteria=['WA1','WA2','WA3','WA4', 'WA5', 'WA6'];
		
			$aa = new ConvertWawancara($lamaran);

			$alt = $aa->make();
			
			$bobot = [$b->wa1,$b->wa2,$b->wa3,$b->wa4,$b->wa5,$b->wa6];
			
			$topsis = new Topsis($kriteria,$alt,$bobot);

			$solpos = $topsis->setSolusiIdeal('positif')->jarakAlternatif();
			$solneg = $topsis->setSolusiIdeal('negatif')->jarakAlternatif();

			return view('stepbystep_wawancara.jarak_alternatif')
				->with('solpos',$solpos)
				->with('solneg',$solneg)
				->with('kriteria',$kriteria)
				->with('id_lowongan',$id_lowongan)
				->with('tahap','Wawancara')
				->with('lamaran',$lamaran)
				->with('next','wawancara.get.hasil');
	}


}
