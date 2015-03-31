<?php namespace App\Http\Controllers\Administrasi;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\Lamaran;
use App\BobotAdministrasi;
use App\Administrasi;
use App\Library\Topsis\Topsis;
use App\Library\Convert\ConvertAdministrasi;

class ProsesAdministrasiController extends Controller {


	public function getProses($id_lowongan){

		$lamaran = Lamaran::where('id_lowongan', '=', $id_lowongan)->get();

		$b = BobotAdministrasi::where('id_lowongan','=',$id_lowongan)->first();
		
		$kriteria=['KA1','KA2','KA3','KA4'];
		
		if(count($lamaran)>2){

			$aa = new ConvertAdministrasi($lamaran);

			$alt = $aa->make();
			
			$bobot = [$b->ka1,$b->ka2,$b->ka3,$b->ka4];
			
			$topsis = new Topsis($kriteria,$alt,$bobot);

			$nilai_topsis = $topsis->make(); // membuat nilai topsis
			
			foreach ($lamaran as $key => $l) {
				
				$adm[$key] = [
					'id_lamaran' => $l->id,
					'nilai_topsis' => $nilai_topsis[$key],
					'created_at' => Carbon::now(),
					'updated_at' => Carbon::now()
				];

				$delete[$key] = $l->id;
			}
			
		/*	foreach ($alt as $key => $value) {
				$urutan = $key+1;
				echo "$urutan =>";
				echo $value[0]."-".$value[1]."-".$value[2]."-".$value[3]."<br><br>";
			}*/
				
			//proses penyimpanan di database
			DB::table('administrasi')->whereIn('id_lamaran',$delete)->delete();
			DB::table('administrasi')->insert($adm);

			return redirect()->route('adm.get.hasil',$id_lowongan);
			

		}else{

			return "maaf pelamar tidak boleh kurang dari 2 orang";
		}
	}

	public function getHasil($id_lowongan, Lamaran $lamaran){

		$kuota = BobotAdministrasi::where('id_lowongan','=',$id_lowongan)->first()->kuota;

		$lulus = $lamaran->lulusAdministrasi($id_lowongan);

		return view('administrasi.hasil')
		->with('lulus',$lulus)
		->with('kuota',$kuota)
		->with('id_lowongan',$id_lowongan);
	}

}