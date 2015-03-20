<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableWawancara extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wawancara', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('id_lamaran')->unsigned();
			$table->integer('wa1');
			$table->integer('wa2');
			$table->integer('wa3');
			$table->integer('wa4');
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
		Schema::drop('wawancara');
	}

}
