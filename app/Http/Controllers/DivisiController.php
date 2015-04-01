<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use Illuminate\Http\Request;

use App\Divisi;

class DivisiController extends Controller {

	public function index()
	{
		//
		return view('divisi.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
			return view('divisi.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//

		Divisi::create($request->all());
		return redirect()->route('divisi.index')
			->with('message','data berhasil ditambah');

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
		return view('divisi.detail')
					->with('id_divisi',$id);
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
		$divisi = Divisi::findOrFail($id);
		return view('divisi.edit')
			->with('divisi',$divisi)
			->with('divisi',$divisi);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		//
		Divisi::findOrFail($id)->update($request->all());
		return redirect()->route('divisi.index');
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
		Divisi::findOrFail($id)->delete();
		return redirect()->route('divisi.index');
	}

	public function datatables(){
		$divisi = Divisi::all();
		$data=array();
		$l=array();
		$i=0;
		foreach ($divisi as $value) {
			$l[0] = $value->nama;
			$l[1] = "
				<a href='".route('divisi.edit',$value->id)."' data-toggle='modal' data-target='#myModal'>Edit</a> - 
				<a href='".route('divisi.destroy',$value->id)."' data-method = 'DELETE' data-confirm='yakin untuk menghapus?' >Hapus</a>
			";

			$data[$i]=$l;
			$i++;
		}

		$return['data'] = $data;
		return response()->json($return);
	}

}
