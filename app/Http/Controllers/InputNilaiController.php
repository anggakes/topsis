<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

class InputNilaiController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getAdministrasi(Request $request, $id_lowongan)
	{
		return $id_lowongan." ";
	}

	public function postAdministrasi(Request $request, $id_lowongan)
	{
		return $id_lowongan." ";
	}



}
