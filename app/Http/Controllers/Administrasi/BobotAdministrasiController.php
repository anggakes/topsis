<?php namespace App\Http\Controllers\Administrasi;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\BobotAdministrasi;

class BobotAdministrasiController extends Controller {

	public function getBobot(){
		return "aa";
	}

	/**
	 * simpan bobot administrasi lowongan
	 *
	 * @return Response
	 */
	public function postBobot(Request $request,BobotAdministrasi $model ,$id_lowongan)
	{
		
		
		$input = $request->all();
		$input['id_lowongan'] =$id_lowongan;

		if($request->has('id'))
		{
			//update
			$model->findOrFail($request->input('id'))->update($input);
		}else{
			//create
			$model->create($input);	
		}
		
		return redirect()->route("lowongan.show");
		
	}

}