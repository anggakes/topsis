<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePelamar extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pelamar', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->string('nama',100);
			$table->string('no_ktp',100)->unique();
			$table->text('alamat');
			$table->string('nomor_pelamar',100)->unique();
			$table->string('kontak',20);
			$table->string('tempat_lahir',100);
			$table->date('tanggal_lahir');	
			$table->float('pengalaman_kerja');
			$table->integer('pendidikan_non_ilmiah');
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
		Schema::drop('pelamar');
	}

}
