<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\Administrasi;
use App\Pelamar;
use App\PendidikanTerakhir;

class InputNilaiController extends Controller {

	/**
	 * administrasi
	 *
	 * @return Response
	 */
	public function getAdministrasi($id_lowongan) // index
	{
		return view('administrasi.inputPelamar');
	}

	public function getCreateAdministrasi($id_lowongan){
		return view('inputnilai.pelamarCreate');
	}

	public function postAdministrasi(Request $request, $id_lowongan)
	{
		
	}







}
