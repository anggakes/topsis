<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
*/

/* 
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/

/* app begin */

Route::get(
	'lowongan/datatables',
	['as'=>'lowongan.datatables',
	'uses'=>'LowonganController@datatables']
);

Route::resource('lowongan','LowonganController');


Route::group(['prefix' => 'lowongan'], function()
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
			['getProses'=>'adm.get.proses']
		);

		

	});// <--- end administrasi

	Route::group(['prefix' => '{id_lowongan}/psikotes','namespace' => 'Psikotes'], function()
	{
		Route::controller(
			'/',"KuotaPsikotesController",
			['getBobot'=>'psikotes.get.bobot','postBobot'=>'psikotes.post.bobot']
		);

	}); //<--- end Psikotest

	Route::group(['prefix' => '{id_lowongan}/tertulis','namespace' => 'Tertulis'], function()
	{
		Route::controller(
			'/',"KuotaTertulisController",
			['getBobot'=>'tertulis.get.bobot','postBobot'=>'tertulis.post.bobot']
		);

	}); //<--- end Tertulis

	Route::group(['prefix' => '{id_lowongan}/wawancara','namespace' => 'Wawancara'], function()
	{
		Route::controller(
			'/',"BobotWawancaraController",
			['getBobot'=>'wawancara.get.bobot','postBobot'=>'wawancara.post.bobot']
		);

	}); //<--- end Tertulis

});// <-- end prefix lowongan


