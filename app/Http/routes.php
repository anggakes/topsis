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
							'index'  	=> 'pelamar.index',
							'store'		=> 'pelamar.store',
							'edit'		=> 'pelamar.edit',
							'update'	=> 'pelamar.update',
							'destroy'	=> 'pelamar.destroy'
						]]
		);

		Route::controller(
			'/',"BobotAdministrasiController",
			['getBobot'=>'adm.get.bobot','postBobot'=>'adm.post.bobot']
		);

		  

	});// <--- end administrasi



});// <-- end prefix lowongan


