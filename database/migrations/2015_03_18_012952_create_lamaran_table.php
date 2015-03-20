<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLamaranTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lamaran', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_pelamar')->unsigned();
			$table->integer('id_lowongan')->unsigned();
			$table->string('nomor_pelamar',100)->unique();
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
		Schema::drop('lamaran');
	}

}
