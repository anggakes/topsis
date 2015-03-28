<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKuotaPsikotes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kuota_psikotes', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('id_lowongan')->unsigned();
			$table->integer('kuota');
			$table->float('nilai_minimum');
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
		Schema::drop('kuota_psikotes');
	}

}
