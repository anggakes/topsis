<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBobotWawancara extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bobot_wawancara', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('id_lowongan')->unsigned();
			$table->decimal('wa1',2,2);
			$table->decimal('wa2',2,2);
			$table->decimal('wa3',2,2);
			$table->decimal('wa4',2,2);
			$table->decimal('wa5',2,2);
			$table->decimal('wa6',2,2);
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
		Schema::drop('bobot_wawancara');
	}

}
