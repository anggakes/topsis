<?php namespace App\Http\Controllers\Administrasi;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;

use App\Lamaran;
use App\BobotAdministrasi;
use App\Library\Topsis\Topsis;
use App\Library\Convert\ConvertAdministrasi;

class ProsesAdministrasiController extends Controller {


	public function getProses($id_lowongan){

		$lamaran = Lamaran::where('id_lowongan', '=', $id_lowongan)->get();

		$b = BobotAdministrasi::where('id_lowongan','=',$id_lowongan)->first();
				
		if(count($lamaran)>2){
			$aa = new ConvertAdministrasi($lamaran);

			$alt = $aa->make();
			
			$kriteria=['KA1','KA2','KA3','KA4'];
			


			$bobot = [$b->ka1,$b->ka2,$b->ka3,$b->ka4];
			
			$topsis = new Topsis($kriteria,$alt,$bobot);
			return $topsis->make();
		}else{

			return "maaf pelamar kurang dari 2 orang";
		}
	}

	



}