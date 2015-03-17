<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePsikotes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('psikotes', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('id_pelamar')->unsigned();
			$table->integer('id_lowongan')->unsigned();
			$table->integer('nilai_psikotes');
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
		Schema::drop('psikotes');
	}

}
