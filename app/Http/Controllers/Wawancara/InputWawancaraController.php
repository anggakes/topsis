<?php namespace App\Http\Controllers\Wawancara;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\Lamaran;
use App\Wawancara;
use App\KuotaTertulis;

class InputWawancaraController extends Controller {

	//

	public function getIndex($id_lowongan, Lamaran $lamaran){

		$kuota = KuotaTertulis::where('id_lowongan','=',$id_lowongan)->first();

		$lulus = $lamaran->lulusTertulis($id_lowongan,$kuota->kuota,$kuota->nilai_minimum);

		foreach ($lulus as $key => $value) {
		
			$nomor_pelamar[$value->id] = "$value->nomor_pelamar - $value->nama";
		
		}

		$option = [
		'5'	=>	'Sangat Baik',
        '4'	=>	'Baik',
        '3'	=>	'Cukup',
        '2'	=>	'Buruk',
        '1'	=>	'Sangat Buruk'
        ];

		return view('wawancara.index')
		->with('option',$option)
		->with('nomor_pelamar',$nomor_pelamar)
		->with('id_lowongan',$id_lowongan);
	}

	public function postIndex($id_lowongan, Request $request){

			$psikotes = Wawancara::firstOrNew(['id_lamaran'=>$request->input('id_lamaran')]);
			$psikotes->fill($request->all());
			$psikotes->save();	

			return redirect()->route('wawancara.get.index',$id_lowongan);	

	}

	public function getDatatables($id_lowongan){

		$wawancara = Wawancara::with(['lamaran'=>function($q)use($id_lowongan){
			
						$q->where('id_lowongan','=',$id_lowongan);
					
					}])->get();

		$data=array();
		$l=array();
		$i=0;
		
		foreach ($wawancara as $value) {
			$l[0] = $value->lamaran->nomor_pelamar;
			$l[1] = $value->lamaran->pelamar->nama;
			$l[2] = $value->wa1;
			$l[3] = $value->wa2;
			$l[4] = $value->wa3;
			$l[5] = $value->wa4;
			$l[6] = $value->lamaran->psikotes->nilai_psikotes;
			$l[7] = $value->lamaran->tertulis->nilai_tertulis;
			$data[$i]=$l;
			$i++;
		}

		$return['data'] = $data;

		return response()->json($return);
	
	}


}
