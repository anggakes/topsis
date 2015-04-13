<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use Illuminate\Http\Request;

use Auth;

use App\Lowongan;
use App\Divisi;
use App\Lamaran;

class LowonganController extends Controller {
	
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
		return view('lowongan.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{

			$divisi = Divisi::lists('nama','id');
			return view('lowongan.create')
			->with('divisi',$divisi);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//

		Lowongan::create($request->all());
		return redirect()->route('lowongan.index')
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
		$jumlah_pelamar = Lamaran::where('id_lowongan','=',$id)->count();
		$lowongan = Lowongan::findOrFail($id);
		return view('lowongan.detail')
					->with('id_lowongan',$id)
					->with('lowongan',$lowongan)
					->with('jumlah_pelamar',$jumlah_pelamar);
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
		$lowongan = Lowongan::findOrFail($id);
		$divisi = Divisi::lists('nama','id');

		return view('lowongan.edit')
			->with('lowongan',$lowongan)
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
		Lowongan::findOrFail($id)->update($request->all());
		return redirect()->route('lowongan.index');
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
		Lowongan::findOrFail($id)->delete();
		return redirect()->route('lowongan.index');
	}

	public function datatables(){
		$lowongan = Lowongan::all();
		$data=array();
		$l=array();
		$i=0;
		foreach ($lowongan as $value) {

			$aksi_admin = (Auth::user()->roles != "admin") ? "" :
				"<a href='".route('lowongan.edit',$value->id)."' data-toggle='modal' data-target='#myModal'>Edit</a> - 
				<a href='".route('lowongan.destroy',$value->id)."' data-method = 'DELETE' data-confirm='yakin untuk menghapus?' >Hapus</a> -";

			$l[0] = $value->nama;
			$l[1] = $value->kode;
			$l[2] = $value->divisi->nama;
			$l[3] = $value->tahap->tahap;
			$l[4] = $value->keterangan;
			$l[5] = "
				$aksi_admin
				<a href='".route('lowongan.show',$value->id)."'>Kelola</a>
			";

			$data[$i]=$l;
			$i++;
		}

		$return['data'] = $data;
		return response()->json($return);
	}


}
