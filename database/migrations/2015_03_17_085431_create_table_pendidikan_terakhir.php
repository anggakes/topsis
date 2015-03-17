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
			$table->date('tahun_lulus');
			$table->date('tahun_masuk');
			$table->decimal('ipk',2,2);
			$table->string('jenjang',5);
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
		Schema::drop('pendidikan_terakhir');
	}

}
