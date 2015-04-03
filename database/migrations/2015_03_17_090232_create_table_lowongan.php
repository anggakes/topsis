<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLowongan extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lowongan', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('id_divisi')->unsigned();
			$table->string('kode',100)->unique();
			$table->string('nama',255);
			$table->text('keterangan');
			$table->timestamps();

			$table->foreign('id_divisi')
      		->references('id')->on('divisi')
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
		Schema::drop('lowongan');
	}

}
