<?php namespace App\Http\Controllers\tertulis;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\KuotaTertulis;
use App\Lamaran;
use App\Lowongan;

class ProsesTertulisController extends Controller {

	//

	public function getHasil($id_lowongan, Lamaran $lamaran){

		$kuota = KuotaTertulis::where('id_lowongan','=',$id_lowongan)->first();

		$lulus = $lamaran->lulusTertulis($id_lowongan, 0, 0); // 0 0 -> ambil semua data

		$l = Lowongan::findOrFail($id_lowongan);
		if($l->id_tahap<10){
			$l->id_tahap = 10;
			$l->save();
		}

		return view('tertulis.hasil')
		->with('lulus',$lulus)
		->with('kuota',$kuota)
		->with('id_lowongan',$id_lowongan);
		
	}

}
