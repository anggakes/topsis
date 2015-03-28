<?php namespace App\Http\Controllers\psikotes;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\KuotaPsikotes;
use App\Lamaran;

class ProsesPsikotesController extends Controller {

	//

	public function getHasil($id_lowongan, Lamaran $lamaran){

		$kuota = KuotaPsikotes::where('id_lowongan','=',$id_lowongan)->first();

		$lulus = $lamaran->lulusPsikotes($id_lowongan, 0, 0); // 0 0 -> ambil semua data

		return view('psikotes.hasil')
		->with('lulus',$lulus)
		->with('kuota',$kuota)
		->with('id_lowongan',$id_lowongan);
		
	}

}
