<?php namespace App\Http\Controllers\Wawancara;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\BobotWawancara;
use App\Lowongan;

class BobotWawancaraController extends Controller {

	public function getBobot(BobotWawancara $model, $id_lowongan){
		
		$bobot = $model->where('id_lowongan','=',$id_lowongan)->first();


		return view('wawancara.bobot')
			->with('id_lowongan',$id_lowongan)
			->with('bobot',$bobot);
	}

	/**
	 * simpan bobot administrasi lowongan
	 *
	 * @return Response
	 */
	public function postBobot(Request $request,BobotWawancara $model ,$id_lowongan)
	{
		
		$bb = $model->firstOrNew(['id_lowongan'=>$id_lowongan]);
		$bb->fill($request->all());
		$bb->save();
		$l = Lowongan::findOrFail($id_lowongan);
			$l->id_tahap = 11;
			$l->save();
		return redirect()->route("lowongan.show",$id_lowongan);
		
	}

}