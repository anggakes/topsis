<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PendidikanNonIlmiah;
use App\PengalamanKerja;

class Pelamar extends Model {

	protected $table ='pelamar';
	protected $guarded =['id'];
	protected $fillable = [
		'nama',
		'alamat',
		'kontak',
		'tempat_lahir',
		'tanggal_lahir',
	];
	//

	/* relation */

	public function pendidikanNonIlmiah(){

		return $this->hasMany("App\PendidikanNonIlmiah","id_pelamar");
	
	}
	
	public function pengalamanKerja(){

		return $this->hasMany("App\PengalamanKerja","id_pelamar");
	
	}

	public function pendidikanTerakhir(){

		return $this->hasOne("App\PendidikanTerakhir","id_pelamar");
	
	}

	public function dynamicInputFieldPendidikanNonIlmiah(){
		$pni = new PendidikanNonIlmiah;
		return $pni->dynamicInputField;
	}

	public function dynamicInputFieldPengalamanKerja(){
		$pni = new PengalamanKerja;
		return $pni->dynamicInputField;
	}

	


}
