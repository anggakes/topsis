<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model {

	protected $table ='pelamar';
	protected $guarded =['id'];
	protected $fillable = [
		'nama',
		'alamat',
		'nomor_pelamar',
		'kontak',
		'tempat_lahir',
		'tanggal_lahir',
		'pengalaman_kerja',
		'pendidikan_non_ilmiah'
	];
	//

}
