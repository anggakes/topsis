<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePendidikanTerakhir extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pendidikan_terakhir', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('id_pelamar')->unsigned();
			$table->string('institusi',255);
			$table->char('akreditas',1);
			$table->integer('tahun_lulus')->unsigned();
			$table->integer('tahun_masuk')->unsigned();
			$table->decimal('ipk',4,2);
			$table->string('jenjang',5);

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
		Schema::drop('pendidikan_terakhir');
	}

}
