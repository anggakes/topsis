<?php namespace App\Http\Controllers\Wawancara;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\Lamaran;
use App\BobotWawancara;
use App\Wawancara;
use App\Library\Topsis\Topsis;
use App\Library\Convert\ConvertWawancara;

class ProsesWawancaraController extends Controller {


	public function getProses($id_lowongan){

		$wawancara = $wawancara = Wawancara::whereHas('lamaran', function($q)use($id_lowongan)
						{
						    $q->where('id_lowongan', '=', $id_lowongan);

						})->get();

		$b = BobotWawancara::where('id_lowongan','=',$id_lowongan)->first();
		
		$kriteria=['WA1','WA2','WA3','WA4', 'WA5', 'WA6'];
		
		if(count($wawancara)>2){

			$aa = new ConvertWawancara($wawancara);

			$alt = $aa->make();
			
			$bobot = [$b->wa1,$b->wa2,$b->wa3,$b->wa4,$b->wa5,$b->wa6];
			
			$topsis = new Topsis($kriteria,$alt,$bobot);

			$nilai_topsis = $topsis->make(); // membuat nilai topsis
			
			foreach ($wawancara as $key => $l) {
				
				$w[$key] = [
					'id_lamaran'	=> $l->lamaran->id,
					'wa1'	=> $l->wa1,
					'wa2'	=> $l->wa2,
					'wa3'	=> $l->wa3,
					'wa4'	=> $l->wa4,
					'nilai_topsis' => $nilai_topsis[$key],
					'created_at' => Carbon::now(),
					'updated_at' => Carbon::now()
				];

				$delete[$key] = $l->lamaran->id;
			}

			//proses penyimpanan di database
			DB::table('wawancara')->whereIn('id_lamaran',$delete)->delete();
			DB::table('wawancara')->insert($w);

			return redirect()->route('wawancara.get.hasil',$id_lowongan);
			

		}else{

			return "maaf pelamar tidak boleh kurang dari 2 orang";
		}
	}

	public function getHasil($id_lowongan, Wawancara $wawancara, Lamaran $lamaran){
		$lulus = Wawancara::with(['lamaran'=>function($q)use($id_lowongan){
			
						$q->where('id_lowongan','=',$id_lowongan);
					
					}])->get();

	return view('wawancara.hasil')
		->with('lulus',$lulus)
		->with('id_lowongan',$id_lowongan);
	}

}