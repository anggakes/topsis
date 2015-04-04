<?php namespace App\Http\Controllers\Administrasi;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;


use App\Pelamar;
use App\pendidikanTerakhir;
use App\Lamaran;
use App\Administrasi;
use App\Lowongan;


class PelamarController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id_lowongan)
	{	

		$jumlah_pelamar = Lamaran::where('id_lowongan','=',$id_lowongan)->count();
		
		return view('administrasi.pelamar.index')
			->with('id_lowongan',$id_lowongan)
			->with('jumlah_pelamar',$jumlah_pelamar);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id_lowongan, Lamaran $lamaran, Pelamar $pelamar)
	{

		$nomor_pelamar 	= $lamaran->makeNomorPelamar($id_lowongan);
		
		return view('administrasi.pelamar.create')
			->with('id_lowongan',$id_lowongan)
			->with('nomor_pelamar', $nomor_pelamar)
			->with('pni',json_encode($pelamar->dynamicInputFieldPendidikanNonIlmiah()))
			->with('pk',json_encode($pelamar->dynamicInputFieldPengalamanKerja()));		
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, $id_lowongan)
	{	
		
		DB::transaction(function()use($request,$id_lowongan){

				$pelamar = Pelamar::firstOrNew(['no_ktp'=>$request->input('pelamar.no_ktp')]);
		
				$pelamar->fill($request->input('pelamar'));

				$pelamar->save();

				$this->savePelamarRelation($request,$pelamar);

				$lamaran = Lamaran::create([
					'id_lowongan'	=> $id_lowongan,
					'id_pelamar'	=> $pelamar->id,
					'nomor_pelamar'	=> $request->input('lamaran.nomor_pelamar')
					]);

			$jumlah_pelamar = Lamaran::where('id_lowongan','=',$id_lowongan)->count();
				if($jumlah_pelamar > 2){
					$l = Lowongan::findOrFail($id_lowongan);
					$l->id_tahap = 3;
					$l->save();
				}

		});
	
		return redirect()->route('pelamar.index',$id_lowongan)
			->with('message','data berhasil disimpan');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id_lowongan, $id)
	{

			
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id_lowongan, $id, Pelamar $pelamar)
	{
		//
		$lamaran = Lamaran::findOrFail($id);

		$nomor_pelamar 	= $lamaran->nomor_pelamar;
		
		return view('administrasi.pelamar.edit')
			->with('lamaran',$lamaran)
			->with('id_lowongan',$id_lowongan)
			->with('nomor_pelamar', $nomor_pelamar)
			->with('pni',json_encode($pelamar->dynamicInputFieldPendidikanNonIlmiah()))
			->with('pk',json_encode($pelamar->dynamicInputFieldPengalamanKerja()));		
		


	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id_lowongan, $id, Request $request)
	{
		//
		DB::transaction(function()use($request,$id_lowongan, $id){

				$lamaran = Lamaran::findOrFail($id);

				$pelamar = Pelamar::findOrFail($lamaran->id_pelamar);
		
				$pelamar->fill($request->input('pelamar'));

				$pelamar->save();

				$this->savePelamarRelation($request,$pelamar);

			
		});
	
		return redirect()->route('pelamar.index',$id_lowongan)
			->with('message','data berhasil disimpan');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_lowongan, $id)
	{
		//
		$lamaran = Lamaran::findOrFail($id);
		$lamaran->delete();

		return redirect()->route('pelamar.index',$id_lowongan)
			->with('message','data berhasil dihapus');

	}

	public function datatables($id_lowongan){

		$lamaran = Lamaran::where('id_lowongan','=',$id_lowongan)->get();
		$data=array();
		$l=array();
		$i=0;
		foreach ($lamaran as $value) {
			$l[0] = $value->nomor_pelamar;
			$l[1] = $value->pelamar->nama;
			$l[2] = $value->pelamar->no_ktp;
			$l[3] = $value->pelamar->tanggal_lahir;
			$l[4] = $value->pelamar->kontak;
			$l[5] = "
				<a href='".route('pelamar.edit',[$id_lowongan,$value->id])."' >Edit</a> - 
				<a href='".route('pelamar.destroy',[$id_lowongan,$value->id])."' data-method = 'DELETE' data-confirm='yakin untuk menghapus?' >Hapus</a> - 
				<a href='".route('pelamar.show',[$id_lowongan,$value->id])."'>Detail</a>
			";

			$data[$i]=$l;
			$i++;
		}

		$return['data'] = $data;
		return response()->json($return);
	}


	private function savePelamarRelation($request, $pelamar){

		DB::transaction(function()use($request,$pelamar){
		
			
			// save Pendidikan terakhir
				$pt = PendidikanTerakhir::firstOrNew(['id_pelamar'=>$pelamar->id]);

				$pt->fill($request->input("pendidikan_terakhir"));

				$pt->save();

			// sync Pengalaman Kerja

				for ($i=0; $i < count($request->input('pk.instansi')); $i++) { 
					$pk[$i] = [
						'id_pelamar'	=> $pelamar->id,
						'jabatan' 		=> $request->input('pk.jabatan.'.$i),
						'instansi'		=> $request->input('pk.instansi.'.$i),
						'tgl_masuk'		=> $request->input('pk.tgl_masuk.'.$i),
						'tgl_keluar'	=> $request->input('pk.tgl_keluar.'.$i)
					];
				}

				DB::table('pengalaman_kerja')->where('id_pelamar', '=', $pelamar->id)->delete();
				DB::table('pengalaman_kerja')->insert($pk);

			// sync pendidikan Non Ilmiah

				for ($i=0; $i < count($request->input('pni.instansi')); $i++) { 
					$pni[$i] = [
						'id_pelamar'	=> $pelamar->id,
						'nama' 			=> $request->input('pni.nama.'.$i),
						'instansi'		=> $request->input('pni.instansi.'.$i),
						'tgl_masuk'		=> $request->input('pni.tgl_masuk.'.$i),
						'tgl_keluar'	=> $request->input('pni.tgl_keluar.'.$i)
					];
				}

				DB::table('pendidikan_non_ilmiah')->where('id_pelamar', '=', $pelamar->id)->delete();
				DB::table('pendidikan_non_ilmiah')->insert($pni);

		});

	}

}
