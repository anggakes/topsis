<?php namespace App\Http\Controllers\psikotes;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\Lamaran;
use App\Psikotes;
use App\BobotAdministrasi;

class InputPsikotesController extends Controller {

	//

	public function getIndex($id_lowongan, Lamaran $lamaran){

		$kuota = BobotAdministrasi::where('id_lowongan','=',$id_lowongan)->first()->kuota;

		$lulus = $lamaran->lulusAdministrasi($id_lowongan,$kuota);

		foreach ($lulus as $key => $value) {
		
			$nomor_pelamar[$value->id] = "$value->nomor_pelamar - $value->nama";
		
		}

		return view('psikotes.index')
		->with('nomor_pelamar',$nomor_pelamar)
		->with('id_lowongan',$id_lowongan);
	}

	public function postIndex($id_lowongan, Request $request){



			$data_psikotes = [
			'id_lamaran'		=> $request->input('id_lamaran'),
			'nilai_psikotes'	=> $request->input('nilai_psikotes')
			];
			
			$psikotes = Psikotes::firstOrNew(['id_lamaran'=>$request->input('id_lamaran')]);
			$psikotes->fill($data_psikotes);
			$psikotes->save();	

			return redirect()->route('psikotes.get.index',$id_lowongan);	

	}

	public function getDatatables($id_lowongan){

		$psikotes = Psikotes::with(['lamaran'=>function($q)use($id_lowongan){
			
						$q->where('id_lowongan','=',$id_lowongan);
					
					}])->get();

		$data=array();
		$l=array();
		$i=0;
		
		foreach ($psikotes as $value) {
			$l[0] = $value->lamaran->nomor_pelamar;
			$l[1] = $value->lamaran->pelamar->nama;
			$l[2] = $value->nilai_psikotes;
			$data[$i]=$l;
			$i++;
		}

		$return['data'] = $data;

		return response()->json($return);
	
	}


}
