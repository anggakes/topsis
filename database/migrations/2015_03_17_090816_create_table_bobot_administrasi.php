<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBobotAdministrasi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bobot_administrasi', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('id_lowongan')->unsigned();
			$table->decimal('ka1',2,2);
			$table->decimal('ka2',2,2);
			$table->decimal('ka3',2,2);
			$table->decimal('ka4',2,2);
			$table->integer('kuota');
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
		Schema::drop('bobot_administrasi');
	}

}
