<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PengalamanKerja extends Model {

	protected $table ='pengalaman_kerja';
	public $timestamps = false;
	protected $guarded =['id'];
	protected $fillable = [
		'jabatan',
		'instansi',
		'id_pelamar',
		'tgl_masuk',
		'tgl_keluar'	
	];
	//
	 public $dynamicInputField=  [
		['name'=>'pk[jabatan][]','type'=>'text','placeholder'=>'Jabatan', 'value'=>''],
		['name'=>'pk[instansi][]','type'=>'text','placeholder'=>'Instansi', 'value'=>''],
		['name'=>'pk[tgl_masuk][]','type'=>'date','placeholder'=>'', 'value'=>''],
		['name'=>'pk[tgl_keluar][]','type'=>'date','placeholder'=>'', 'value'=>'']
	];
	

}
