<?php namespace App\Library\Convert;

class ConvertWawancara{

	public $wawancara;


	public function __construct($wawancara){

		$this->wawancara = $wawancara;
	
	}

	public function make(){
		$i =0;
		foreach ($this->wawancara as $key => $wawancara) {
				$data[$i][0] = $wawancara->wa1;
				$data[$i][1] = $wawancara->wa2;
				$data[$i][2] = $wawancara->wa3;
				$data[$i][3] = $wawancara->wa4;
				$data[$i][4] = $wawancara->lamaran->psikotes->nilai_psikotes;
				$data[$i][5] = $wawancara->lamaran->tertulis->nilai_tertulis;
			$i++;
			}	
		return $data;
	}


}