<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;
use Illuminate\Contracts\Auth\Registrar;


use App\User;
use App\Divisi;

class UserController extends Controller {

	public function __construct(){

		$this->middleware('auth');
	
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
			return view('user.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$divisi = Divisi::lists('nama','id');
		return view('user.create')
		->with('divisi',$divisi);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, Registrar $registrar)
	{
		//
		$validator = $registrar->validator($request->all());

		if ($validator->fails())
		{
			$this->throwValidationException(
				$request, $validator
			);
		}

		$registrar->create($request->all());

		return redirect()->route('user.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$divisi = Divisi::lists('nama','id');
		$user = User::findOrFail($id);
		return view('user.edit')
			->with('user',$user)
			->with('divisi',$divisi);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request, Registrar $registrar)
	{
		//
		$validator = $registrar->validatorUpdate($request->all());

		if ($validator->fails())
		{
			$this->throwValidationException(
				$request, $validator
			);
		}

		$registrar->update($id,$request->all());

		return redirect()->route('user.index');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		User::findOrFail($id)->delete();
		return redirect()->route('user.index');
	}

	public function datatables(){
		$user = User::all();
		$data=array();
		$l=array();
		$i=0;
		foreach ($user as $value) {
			$l[0] = $value->name;
			$l[1] = $value->username;
			$l[2] = $value->roles;
			$l[3] = $value->divisi->nama;
			$l[4] = '
				<a href="'.route("user.edit",$value->id).'" class="button small blanchedalmond" id="edit" onclick="edit(this)" data-toggle="modal" data-target="#myModal">Edit</a> 
				<a href="'.route("user.destroy",$value->id).'" class="button small mistyrose" id="delete" data-method = "DELETE" data-confirm="yakin untuk menghapus?" >Hapus</a>
			';

			$data[$i]=$l;
			$i++;
		}

		$return['data'] = $data;
		return response()->json($return);
	}

}
