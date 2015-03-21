<?php namespace App\Http\Controllers\Administrasi;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\BobotAdministrasi;

class BobotAdministrasiController extends Controller {

	public function getBobot(BobotAdministrasi $model, $id_lowongan){
		
		$bobot = $model->where('id_lowongan','=',$id_lowongan)->first();


		return view('administrasi.bobot')
			->with('id_lowongan',$id_lowongan)
			->with('bobot',$bobot);
	}

	/**
	 * simpan bobot administrasi lowongan
	 *
	 * @return Response
	 */
	public function postBobot(Request $request,BobotAdministrasi $model ,$id_lowongan)
	{
		
		$bb = $model->firstOrNew(['id_lowongan'=>$id_lowongan]);
		$bb->fill($request->all());
		$bb->save();
		
		return redirect()->route("lowongan.show",$id_lowongan);
		
	}

}