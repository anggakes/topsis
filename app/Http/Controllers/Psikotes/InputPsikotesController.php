<?php namespace App\Http\Controllers\psikotes;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\Lamaran;
use App\Psikotes;
use App\BobotAdministrasi;
use App\Lowongan;

class InputPsikotesController extends Controller {

	//

	public function getIndex($id_lowongan, Lamaran $lamaran){

		$kuota = BobotAdministrasi::where('id_lowongan','=',$id_lowongan)->first()->kuota;

		$lulus = $lamaran->lulusAdministrasi($id_lowongan,$kuota);

		$psikotes = Psikotes::whereHas('lamaran',function($q)use($id_lowongan){
				$q->where('id_lowongan','=',$id_lowongan);
		})->get();
		$data_id =array();
		foreach ($psikotes as $key => $value) {
			$data_id [$key] = $value->id_lamaran;	
		}

		$nomor_pelamar=array();
		if(count($lulus)>0){
		foreach ($lulus as $key => $value) {
			if( !in_array($value->id,$data_id)){
				$nomor_pelamar[$value->id] = "$value->nomor_pelamar - $value->nama";
			}
		}
			}
		return view('psikotes.index')
		->with('jumlah_pelamar',count($psikotes))
		->with('nomor_pelamar',$nomor_pelamar)
		->with('id_lowongan',$id_lowongan);
	}

	public function postIndex($id_lowongan, Request $request){



			$data_psikotes = [
			'id_lamaran'		=> $request->input('id_lamaran'),
			'nilai_psikotes'	=> $request->input('nilai_psikotes')
			];
			
			$psikotes = Psikotes::firstOrNew(['id_lamaran'=>$request->input('id_lamaran')]);
			$psikotes->fill($data_psikotes);
			$psikotes->save();	


			return redirect()->route('psikotes.get.index',$id_lowongan);	

	}

	public function hapus($id_lowongan,$id){
		Psikotes::findOrFail($id)->delete();
		return redirect()->route('psikotes.get.index',$id_lowongan);
	}


	public function getDatatables($id_lowongan){

		$psikotes = DB::table('lamaran')
					->select('lamaran.nomor_pelamar','pelamar.nama','psikotes.nilai_psikotes','psikotes.id')
					->join('pelamar','pelamar.id','=','lamaran.id_pelamar')
					->join('psikotes','lamaran.id','=','psikotes.id_lamaran')
					->where('lamaran.id_lowongan','=',$id_lowongan)->get();

		$data=array();
		$l=array();
		$i=0;
		
		foreach ($psikotes as $value) {
			$l[0] = $value->nomor_pelamar;
			$l[1] = $value->nama;
			$l[2] = $value->nilai_psikotes;
			$l[3] = "<a href='".route('psikotes.destroy',[$id_lowongan,$value->id])."' data-method = 'DELETE' data-confirm='yakin untuk menghapus?' >Hapus</a>";
			$data[$i]=$l;
			$i++;
		}

		$return['data'] = $data;

		return response()->json($return);
	
	}


}
