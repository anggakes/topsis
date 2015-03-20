<?php namespace App;

use Illuminate\Database\Eloquent\Model;

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
	

}
