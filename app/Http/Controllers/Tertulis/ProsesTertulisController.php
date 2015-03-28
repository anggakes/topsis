<?php namespace App\Http\Controllers\tertulis;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\KuotaTertulis;
use App\Lamaran;

class ProsesTertulisController extends Controller {

	//

	public function getHasil($id_lowongan, Lamaran $lamaran){

		$kuota = KuotaTertulis::where('id_lowongan','=',$id_lowongan)->first();

		$lulus = $lamaran->lulusTertulis($id_lowongan, 0, 0); // 0 0 -> ambil semua data

		return view('tertulis.hasil')
		->with('lulus',$lulus)
		->with('kuota',$kuota)
		->with('id_lowongan',$id_lowongan);
		
	}

}
