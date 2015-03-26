<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PendidikanNonIlmiah extends Model {

	protected $table ='pendidikan_non_ilmiah';
	public $timestamps = false;
	protected $guarded =['id'];
	protected $fillable = [
		'nama',
		'instansi',
		'id_pelamar',
		'tgl_masuk',
		'tgl_keluar'	
	];


	 public $dynamicInputField=  [
		['name'=>'pni[nama][]','type'=>'text','placeholder'=>'nama', 'value'=>''],
		['name'=>'pni[instansi][]','type'=>'text','placeholder'=>'Instansi', 'value'=>''],
		['name'=>'pni[tgl_masuk][]','type'=>'date','placeholder'=>'', 'value'=>''],
		['name'=>'pni[tgl_keluar][]','type'=>'date','placeholder'=>'', 'value'=>'']
	];
	



	
	

}
