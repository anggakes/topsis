<?php namespace App\Http\Controllers\Psikotes;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\KuotaPsikotes;
use App\Lowongan;

class KuotaPsikotesController extends Controller {

	public function getBobot(KuotaPsikotes $model, $id_lowongan){
		
		$bobot = $model->where('id_lowongan','=',$id_lowongan)->first();


		return view('psikotes.kuota3')
			->with('id_lowongan',$id_lowongan)
			->with('bobot',$bobot);
	}

	/**
	 * simpan bobot administrasi lowongan
	 *
	 * @return Response
	 */
	public function postBobot(Request $request,KuotaPsikotes $model ,$id_lowongan)
	{
		
		$bb = $model->firstOrNew(['id_lowongan'=>$id_lowongan]);
		$bb->fill($request->all());
		$bb->save();
		
		$l = Lowongan::findOrFail($id_lowongan);
			$l->id_tahap = 5;
			$l->save();
		return redirect()->route("lowongan.show",$id_lowongan);
		
	}

}