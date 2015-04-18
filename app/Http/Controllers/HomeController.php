<?php namespace App\Http\Controllers;
use Auth;

class HomeController extends Controller {
	
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{	
		if(Auth::check()){
			return view('home');	
		}else{
			return view('auth.login');
		}
		
	}

}
