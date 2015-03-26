<?php namespace App\Library\Convert;

use App\Lamaran;
use DateTime;

class ConvertAdministrasi{

	public $lamaran;

	public $id_lowongan;


	public function __construct($lamaran){

		$this->lamaran = $lamaran;
	
	}

	public function make(){
		$i =0;
		foreach ($this->lamaran as $key => $lamaran) {
				$data[$i][0] = $this->akreditas($lamaran->pelamar->pendidikanTerakhir->akreditas);
				$data[$i][1] = $this->ipk($lamaran->pelamar->pendidikanTerakhir->ipk);
				$data[$i][2] = $this->pendidikanNonIlmiah($lamaran->pelamar->pendidikanNonIlmiah);
				$data[$i][3] = $this->pengalamanKerja($lamaran->pelamar->pengalamanKerja);
			$i++;
			}	
		return $data;
	}

	public function akreditas($akreditas){

		$point = ['A'=>5,'B'=>3,'C'=>1];
		
		return $point[$akreditas];

	}

	public function ipk($ipk){

		$point = [0 => 1,
			0.81 =>2,
			1.71 =>3,
			2.51 =>4,
			3.31 =>5
		];
		$v = 1;
		foreach ($point as $key => $value) {
			if($key<$ipk){
				$v = $value;
			}
		}

		return $v ;
	}

	public function pendidikanNonIlmiah($pni){

		$point = [
			0 => 1,
			2 => 2,
			4 => 3,
			6 => 4, 
			7 => 5
		];

		$v = 1;
		foreach ($point as $key => $value) {
			if($key<=count($pni)){
				$v = $value;
			}
		}

		return $v ;
	}

	public function pengalamanKerja($pk){

		$point = [
			0 => 1,
			3 => 3,
			6 => 5
		];

		$lama_kerja =0;
		
		foreach ($pk as $i => $val) {
			$masuk = new DateTime($val->tgl_masuk);
			$keluar = new DateTime($val->tgl_keluar);

			$interval = $masuk->diff($keluar);
			$lama_kerja += $interval->y;
		}

		$v = 1;
		foreach ($point as $key => $value) {
			if($key<=$lama_kerja){
				$v = $value;
			}
		}

		return $v ;

	}


}