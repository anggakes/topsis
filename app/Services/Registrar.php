<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'username' => 'required|max:255|unique:users',
			'password' => 'required|confirmed',
		]);
	}

	public function validatorUpdate(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'username' => 'required|max:255',
		]);
	}


	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'name' => $data['name'],
			'username' => $data['username'],
			'password' => bcrypt($data['password']),
			'roles' => $data['roles'],
			'id_divisi' => $data['id_divisi'],
		]);
	}

	public function update($id,array $data){

		return User::findOrFail($id)->update([
			'name' => $data['name'],
			'username' => $data['username'],
			'roles' => $data['roles'],
			'id_divisi' => $data['id_divisi'],
			]);
	}

}
