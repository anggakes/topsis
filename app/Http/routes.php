<?php
Route::get('laporan/{id}',['as'=>'laporan','uses'=>'Homecontroller@laporan']);
Route::get('/logs',function(){	return view('template.index');   });

Route::controller('gantipassword','GantiPasswordController');

// Divisi

Route::get(
	'divisi/datatables',
	['as'=>'divisi.datatables',
	'uses'=>'DivisiController@datatables']
);

Route::resource('divisi','DivisiController');

// Lowongan 

Route::get(
	'lowongan/datatables',
	['as'=>'lowongan.datatables',
	'uses'=>'LowonganController@datatables']
);

Route::resource('lowongan','LowonganController');

// User

Route::get(
	'user/datatables',
	['as'=>'user.datatables',
	'uses'=>'UserController@datatables']
);

Route::resource('user','UserController');

Route::group(['middleware' => 'auth','prefix' => 'lowongan'], function()
{

	Route::group(['prefix' => '{id_lowongan}/administrasi','namespace' => 'Administrasi'], function()
	{



		Route::get(
			'pelamar/datatables',
			['as'=>'pelamar.datatables','uses'=>'PelamarController@datatables']
		);

		Route::resource(
			'/pelamar','PelamarController',
			 ['names' => [
							'create' 	=> 'pelamar.create',
							'show' 		=> 'pelamar.show',
							'index'  	=> 'pelamar.index',
							'store'		=> 'pelamar.store',
							'edit'		=> 'pelamar.edit',
							'update'	=> 'pelamar.update',
							'destroy'	=> 'pelamar.destroy'
						]]
		);

		Route::controller(
			'bobot',"BobotAdministrasiController",
			['getBobot'=>'adm.get.bobot','postBobot'=>'adm.post.bobot']
		);


		Route::controller(
			'proses',"ProsesAdministrasiController",
			['getProses'=>'adm.get.proses', 'getHasil'=>'adm.get.hasil']
		);

		Route::controller(
			'stepbystep',"StepByStepAdministrasiController",
			[
			'getAlternatif'=>'adm.sbs.alternatif',
			'getKuadratHasilAkar'=>'adm.sbs.kuadrathasilakar',
			'getMatrikNormalisasi'=>'adm.sbs.matriknormalisasi',
			'getMatrikNormalisasiBobot'=>'adm.sbs.matriknormalisasibobot',
			'getSolusiIdeal'=>'adm.sbs.solusiideal',
			'getMatrikNormalisasiBobotSolusiIdeal'=>'adm.sbs.matriknormalisasibobotsolusiideal',
			'getJarakAlternatif'=>'adm.sbs.jarakalternatif'
			]
		);

		

	});// <--- end administrasi

	Route::group(['prefix' => '{id_lowongan}/psikotes','namespace' => 'Psikotes'], function()
	{
		Route::controller(
			'bobot',"KuotaPsikotesController",
			['getBobot'=>'psikotes.get.bobot','postBobot'=>'psikotes.post.bobot']
		);

		Route::delete('input/{id}',['as'=>'psikotes.destroy','uses'=>'InputPsikotesController@hapus']);

		Route::controller(
			'input',"InputPsikotesController",
			[
			'getIndex'=>'psikotes.get.index',
			'postIndex'=>'psikotes.post.index',
			'getDatatables'=>'psikotes.datatables'
			]
		);



		Route::controller(
			'proses',"ProsesPsikotesController",
			['getHasil'=>'psikotes.get.hasil']
		);

	}); //<--- end Psikotest

	Route::group(['prefix' => '{id_lowongan}/tertulis','namespace' => 'Tertulis'], function()
	{
		Route::controller(
			'bobot',"KuotaTertulisController",
			['getBobot'=>'tertulis.get.bobot','postBobot'=>'tertulis.post.bobot']
		);

		Route::delete('input/{id}',['as'=>'tertulis.destroy','uses'=>'InputTertulisController@hapus']);
		Route::controller(
			'input',"InputTertulisController",
			[
			'getIndex'=>'tertulis.get.index',
			'postIndex'=>'tertulis.post.index',
			'getDatatables'=>'tertulis.datatables'
			]
		);

		Route::controller(
			'proses',"ProsesTertulisController",
			['getHasil'=>'tertulis.get.hasil']
		);


	}); //<--- end Tertulis

	Route::group(['prefix' => '{id_lowongan}/wawancara','namespace' => 'Wawancara'], function()
	{
		Route::controller(
			'bobot',"BobotWawancaraController",
			['getBobot'=>'wawancara.get.bobot','postBobot'=>'wawancara.post.bobot']
		);

		Route::delete('input/{id}',['as'=>'wawancara.destroy','uses'=>'InputWawancaraController@hapus']);
		 Route::controller(
			'input',"InputWawancaraController",
			[
			'getIndex'=>'wawancara.get.index',
			'postIndex'=>'wawancara.post.index',
			'getDatatables'=>'wawancara.datatables'
			]
		);

		 Route::controller(
			'proses',"ProsesWawancaraController",
			['getProses'=>'wawancara.get.proses', 'getHasil'=>'wawancara.get.hasil']
		);

		 Route::controller(
			'stepbystep',"StepByStepWawancaraController",
			[
			'getAlternatif'=>'wawancara.sbs.alternatif',
			'getKuadratHasilAkar'=>'wawancara.sbs.kuadrathasilakar',
			'getMatrikNormalisasi'=>'wawancara.sbs.matriknormalisasi',
			'getMatrikNormalisasiBobot'=>'wawancara.sbs.matriknormalisasibobot',
			'getSolusiIdeal'=>'wawancara.sbs.solusiideal',
			'getMatrikNormalisasiBobotSolusiIdeal'=>'wawancara.sbs.matriknormalisasibobotsolusiideal',
			'getJarakAlternatif'=>'wawancara.sbs.jarakalternatif'
			]
		);

	}); //<--- end Tertulis

});// <-- end prefix lowongan


Route::controller('login','Auth\Authcontroller');

Route::get('/',['as'=>'home','uses'=>'Homecontroller@index']);
