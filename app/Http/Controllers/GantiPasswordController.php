<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use Illuminate\Http\Request;

use App\User;
use Auth;

class GantiPasswordController extends Controller {

	public function getIndex(){

		return view('auth.gantipassword'); 
	}

	public function postIndex(Request $request){

		$user = User::find(Auth::user()->id);
		
		if($user->password == bcrypt($request->input('oldpass')))
		{
			$user->update([
				'password'=>bcrypt($request->input('newpass'))
				]);
				return redirect('gantipassword')->with('message','password baru berhasil disimpan');
		}
		else{
			return redirect('gantipassword')->with('message','password lama tidak sama');
		}
	}

}
