<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model {

	protected $table ='lowongan';
	protected $guarded =['id'];
	protected $fillable = [
		'id_divisi',
		'nama',
		'keterangan',
		'kode'
	];

	public function divisi(){

		return $this->belongsTo("App\Divisi","id_divisi");
		
	}

}
