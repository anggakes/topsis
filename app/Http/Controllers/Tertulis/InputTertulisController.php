<?php namespace App\Http\Controllers\Tertulis;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\Lamaran;
use App\Tertulis;
use App\KuotaPsikotes;

class InputTertulisController extends Controller {

	//

	public function getIndex($id_lowongan, Lamaran $lamaran){

		$kuota = KuotaPsikotes::where('id_lowongan','=',$id_lowongan)->first();

		$lulus = $lamaran->lulusPsikotes($id_lowongan,$kuota->kuota,$kuota->nilai_minimum);

		foreach ($lulus as $key => $value) {
		
			$nomor_pelamar[$value->id] = "$value->nomor_pelamar - $value->nama";
		
		}

		return view('tertulis.index')
		->with('nomor_pelamar',$nomor_pelamar)
		->with('id_lowongan',$id_lowongan);
	}

	public function postIndex($id_lowongan, Request $request){



			$data_tertulis = [
			'id_lamaran'		=> $request->input('id_lamaran'),
			'nilai_tertulis'	=> $request->input('nilai_tertulis')
			];
			
			$tertulis = Tertulis::firstOrNew(['id_lamaran'=>$request->input('id_lamaran')]);
			$tertulis->fill($data_tertulis);
			$tertulis->save();	

			return redirect()->route('tertulis.get.index',$id_lowongan);	

	}

	public function getDatatables($id_lowongan){

		$tertulis = Tertulis::with(['lamaran'=>function($q)use($id_lowongan){
			
						$q->where('id_lowongan','=',$id_lowongan);
					
					}])->get();

		$data=array();
		$l=array();
		$i=0;
		
		foreach ($tertulis as $value) {
			$l[0] = $value->lamaran->nomor_pelamar;
			$l[1] = $value->lamaran->pelamar->nama;
			$l[2] = $value->nilai_tertulis;
			$data[$i]=$l;
			$i++;
		}

		$return['data'] = $data;

		return response()->json($return);
	
	}


}
