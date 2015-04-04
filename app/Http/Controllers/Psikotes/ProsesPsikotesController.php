<?php namespace App\Http\Controllers\psikotes;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\KuotaPsikotes;
use App\Lamaran;
use App\Lowongan;

class ProsesPsikotesController extends Controller {

	//

	public function getHasil($id_lowongan, Lamaran $lamaran){
		

		$kuota = KuotaPsikotes::where('id_lowongan','=',$id_lowongan)->first();

		$lulus = $lamaran->lulusPsikotes($id_lowongan, 0, 0); // 0 0 -> ambil semua data

		$l = Lowongan::findOrFail($id_lowongan);
		
		if($l->id_tahap<7){
			$l->id_tahap = 7;
			$l->save();
		}

		return view('psikotes.hasil')
		->with('lulus',$lulus)
		->with('kuota',$kuota)
		->with('id_lowongan',$id_lowongan);
		
	}

}
