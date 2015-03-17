<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTertulis extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tertulis', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('id_pelamar')->unsigned();
			$table->integer('id_lowongan')->unsigned();
			$table->integer('nilai_tertulis');
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
		Schema::drop('tertulis');
	}

}
