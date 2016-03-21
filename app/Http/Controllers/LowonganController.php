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

	public function create(Lowongan $lowongan)
	{
			$kd_lowongan = $lowongan->makeKodeLowongan();
			$divisi = Divisi::lists('nama','id');

			return view('lowongan.create')
			->with('divisi',$divisi)
			->with('kd_lowongan',$kd_lowongan);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$insert=$request->all();
		$insert['id_tahap']=1;
		Lowongan::create($insert);
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
				"<a href='".route('lowongan.edit',$value->id)."'class='button small blanchedalmond' id='edit' onclick='edit(this)' data-toggle='modal' data-target='#myModal'>Edit</a> 
				<a href='".route('lowongan.destroy',$value->id)."' class='button small mistyrose' data-method = 'DELETE' data-confirm='yakin untuk menghapus?' >Hapus</a> ";

			$rAdmin= (Auth::user()->roles == "admin") ? "
				<li><a href='#'>Administrasi</a>
		        	<ul>
		         <li><a class=''      		id='bobotAdm'  
				                      		href='".route('adm.get.bobot',$value->id)."'
											data-toggle='modal'
											data-target='#myModal'>
				                      		 Bobot</a>
				  </li>
				  <li><a class='".$this->disabled('kelolapelamar',$value->id_tahap)."'
											id='kelolaPelamar'  
											href='".route('pelamar.index',$value->id)."'' >
				                      		Kelola Pelamar</a>
				  </li>
		          <li><a  class='".$this->disabled('hasiladm',$value->id_tahap)."'
					                      	id='hasilAdm'  
											href='".route('adm.get.hasil',$value->id)."'>
				                      		 Hasil</a>
				  </li>
				  
				 
		        </ul>
		      </li>"
		      : "";

		      $rtimindependent= (Auth::user()->roles == "tim independent") ? "
				<li><a href='#'>Psikotes</a>
		        	<ul>
		        <li><a class=''      		id='bobotpsikotes'  
				                      		href='".route('psikotes.get.bobot',$value->id)."'
											data-toggle='modal'
											data-target='#myModal'>
				                      		 Bobot</a>
				  </li>
				  <li><a class='".$this->disabled('psikotesindex',$value->id_tahap)."'
											id='psikotesindex'  
											href='".route('psikotes.get.index',$value->id)."'' >
				                      		Input Nilai</a>
				  </li>
		          <li><a  class='".$this->disabled('hasilpsikotes',$value->id_tahap)."'
					                      	id='hasilpsikotes'  
											href='".route('psikotes.get.hasil',$value->id)."'>
				                      		 Hasil</a>
				  </li>
				  
				  
		        </ul>
		      </li>

		      <li><a href='#'>Tertulis</a>
		        	<ul>
		        <li><a class=''      		id='bobottertulis'  
				                      		href='".route('tertulis.get.bobot',$value->id)."'
											data-toggle='modal'
											data-target='#myModal'>
				                      		 Bobot</a>
				  </li>
				  <li><a class='".$this->disabled('tertulisindex',$value->id_tahap)."'
											id='psikotesindex'  
											href='".route('tertulis.get.index',$value->id)."'' >
				                      		Input Nilai</a>
				  </li>
		          <li><a  class='".$this->disabled('hasiltertulis',$value->id_tahap)."'
					                      	id='hasilpsikotes'  
											href='".route('tertulis.get.hasil',$value->id)."'>
				                      		 Hasil</a>
				  </li>
				  
				  
		        </ul>
		      </li>

		      <li><a href='#'>Wawancara</a>
		        	<ul>
		        <li><a class=''      		id='bobotwawancara'  
				                      		href='".route('wawancara.get.bobot',$value->id)."'
											data-toggle='modal'
											data-target='#myModal'>
				                      		 Bobot</a>
				  </li>
				  <li><a class='".$this->disabled('wawancaraindex',$value->id_tahap)."'
											id='psikotesindex'  
											href='".route('wawancara.get.index',$value->id)."'' >
				                      		Nilai</a>
				  </li>
		          <li><a  class='".$this->disabled('hasilwawancara',$value->id_tahap)."'
					                      	id='hasilpsikotes'  
											href='".route('wawancara.get.hasil',$value->id)."'>
				                      		 Hasil</a>
				  </li>
				  
				  
		        </ul>
		      </li>


		      "
		      : "";

		    
			$l[0] = $value->nama;
			$l[1] = $value->kode;
			$l[2] = $value->divisi->nama;
			$l[3] = $value->tahap->tahap;
			$l[4] = $value->keterangan;
			$l[5] = "
				$aksi_admin
				<nav id='primary_nav_wrap'>
					<ul>
					  <li><a href='".route('lowongan.show',$value->id)."' class='button small azure'>Kelola</a>
					    <ul>
					    	$rAdmin
					    	$rtimindependent
					    </ul>

					  </li>  
					</ul>
				</nav>
			";

			$data[$i]=$l;
			$i++;
		}

		$return['data'] = $data;
		return response()->json($return);
	}

	private function disabled($btn,$tahap){
		$return = '';
		switch ($btn) {
			case 'kelolapelamar':
				$return = ($tahap>1) ? '': 'disabled';
				break;

			case 'hasiladm':
				$return = ($tahap>2) ? '': 'disabled';
				break;
			
			case 'psikotesindex':
				$return = ($tahap>4) ? '': 'disabled';
				break;
			case 'hasilpsikotes':
				$return = ($tahap>5) ? '': 'disabled';
				break;

			case 'tertulisindex':
				$return = ($tahap>7) ? '': 'disabled';
				break;
			case 'hasiltertulis':
				$return = ($tahap>8) ? '': 'disabled';
				break;

			case 'wawancaraindex':
				$return = ($tahap>10) ? '': 'disabled';
				break;
			case 'hasilwawancara':
				$return = ($tahap>12) ? '': 'disabled';
				break;
			
			default:
				# code...
				break;
		}

		return $return;
	}

}
