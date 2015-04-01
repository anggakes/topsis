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

		$tertulis = Tertulis::whereHas('lamaran',function($q)use($id_lowongan){
				$q->where('id_lowongan','=',$id_lowongan);
		})->get();

		foreach ($tertulis as $key => $value) {
			$data_id [$key] = $value->id_lamaran;	
		}

		$nomor_pelamar=array();
		foreach ($lulus as $key => $value) {
			if( !in_array($value->id,$data_id)){
				$nomor_pelamar[$value->id] = "$value->nomor_pelamar - $value->nama";
			}
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

		$tertulis = DB::table('lamaran')
					->select('lamaran.nomor_pelamar','pelamar.nama','tertulis.nilai_tertulis')
					->join('pelamar','pelamar.id','=','lamaran.id_pelamar')
					->join('tertulis','lamaran.id','=','tertulis.id_lamaran')
					->where('lamaran.id_lowongan','=',$id_lowongan)->get();

		$data=array();
		$l=array();
		$i=0;
		
		foreach ($tertulis as $value) {
			$l[0] = $value->nomor_pelamar;
			$l[1] = $value->nama;
			$l[2] = $value->nilai_tertulis;
			$data[$i]=$l;
			$i++;
		}

		$return['data'] = $data;

		return response()->json($return);
	
	}


}
