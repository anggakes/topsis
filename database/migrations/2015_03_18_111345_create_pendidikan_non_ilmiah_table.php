<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendidikanNonIlmiahTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pendidikan_non_ilmiah', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("id_pelamar")->unsigned();
			$table->string('nama',100);
			$table->string('instansi',100);
			$table->date("tgl_masuk");
			$table->date("tgl_keluar");

			$table->foreign('id_pelamar')
      		->references('id')->on('pelamar')
      		->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pendidikan_non_ilmiah');
	}

}
