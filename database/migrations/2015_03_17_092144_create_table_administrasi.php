<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdministrasi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('administrasi', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('id_pelamar')->unsigned();
			$table->integer('id_lowongan')->unsigned();
			$table->float('nilai_topsis');
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
		Schema::drop('administrasi');
	}

}
