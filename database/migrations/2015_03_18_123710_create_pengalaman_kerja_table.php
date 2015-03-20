<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengalamanKerjaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pengalaman_kerja', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("id_pelamar")->unsigned();
			$table->string('jabatan',100);
			$table->string('instansi',100);
			$table->date("tgl_masuk");
			$table->date("tgl_keluar");
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pengalaman_kerja');
	}

}
