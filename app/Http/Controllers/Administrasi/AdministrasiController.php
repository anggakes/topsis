<?php namespace App\Http\Controllers\Administrasi;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\BobotAdministrasi;
use App\Pelamar;
use App\Lamaran;
use App\Administrasi;


class AdministrasiController extends Controller {

	
	
	

	public function getPelamar($id_lowongan){

		return view('administrasi.pelamar')
				->with('id_lowongan',$id_lowongan);
	}

	public function getCreatePelamar($id_lowongan){

		return view('administrasi.inputPelamar')
				->with('id_lowongan',$id_lowongan);
	}

	public function getEditPelamar($id_lowongan,$one){
		$pelamar = Pelamar::find($one);

		return view('administrasi.inputPelamar')
				->with('id_lowongan',$id_lowongan)
				->with('pelamar',$pelamar)
				->with('method', 'PATCH');
	}

	public function postStorePelamar(Request $request, $id_lowongan){

		// create atau update berdasarkan no.ktp peserta
		$pelamar = Pelamar::where('no_ktp','=',$request->input('no_ktp'))->first();

			// create
			DB::transaction(function() use ($request,$pelamar,$id_lowongan)
			{

				
					$pelamar = Pelamar::push($request->input('datadiri'));
					
					// input data pendidikan
					$input = $request->input('pendidikan');
					$input['id_pelamar'] = $pelamar->id;
					$pt = PendidikanTerakhir::create($input);


			});
	}






}
