<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model {

	protected $table ='divisi';
	protected $guarded =['id'];
	protected $fillable = ['nama'];

}
