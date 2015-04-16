<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Lowongan extends Model {

	protected $table ='lowongan';
	protected $guarded =['id'];
	protected $fillable = [
		'id_divisi',
		'nama',
		'keterangan',
		'kode',
		'id_tahap'
	];

	public function makeKodeLowongan(){
		$year = date("Y");
		$get = DB::table($this->table)->whereRaw("Year(created_at)='$year'")->orderBy('id','desc')->first();
		if(count($get)>0){
			$p = explode('-',$get->kode);
			$id = $p[2] + 1;
			return "NK-$year-$id";
		}else{
			return "NK-$year-1";
		}
	}	

	public function divisi(){

		return $this->belongsTo("App\Divisi","id_divisi");
		
	}

	public function tahap(){
		return $this->belongsTo("App\Tahap","id_tahap");
	}

}
