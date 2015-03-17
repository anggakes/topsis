<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\BobotAdministrasi;
use App\KuotaPsikotes;
use App\KuotaTertulis;
use App\BobotWawancara;


class BobotController extends Controller {

	/**
	 * simpan bobot administrasi lowongan
	 *
	 * @return Response
	 */
	public function postAdministrasi(Request $request,BobotAdministrasi $model ,$id_lowongan)
	{
		
		return $this->save($request,$model,$id_lowongan);
		
	}

	public function postPsikotes(Request $request,KuotaPsikotes $model ,$id_lowongan)
	{
		
		return $this->save($request,$model,$id_lowongan);
		
	}
	
	public function postTertulis(Request $request,KuotaTertulis $model ,$id_lowongan)
	{
		
		return $this->save($request,$model,$id_lowongan);
		
	}
	
	public function postWawancara(Request $request,BobotWawancara $model ,$id_lowongan)
	{
		
		return $this->save($request,$model,$id_lowongan);
		
	}

	/* 
	*	Fungsi untuk menyimpan data ke tabel bobot
	*	masing-masing kriteria
	*/

	private function save($request, $model, $id_lowongan){

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
		
		return redirect('lowongan.detail');

	}

}
