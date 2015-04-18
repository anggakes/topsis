<?php namespace App\Http\Controllers;
use Auth;
use App\Lowongan;
use App\Lamaran;

class HomeController extends Controller {
	
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{	
		if(Auth::check()){
			
			if(Auth::user()->roles == 'top manager'){
				$lowongan = Lowongan::where('id_divisi','=',Auth::user()->id_divisi)->orderBy('created_at','desc')->get();
				return view('manager.home_manager')
				->with('lowongan',$lowongan);
			}else{
				return view('home');	
			}

		}else{
			return view('auth.login');
		}
		
	}

	public function laporan($id_lowongan){

		$lamaran = new Lamaran;
		return view('manager.laporan')
		->with('lamaran',$lamaran)
		->with('id_lowongan',$id_lowongan);

	}

}
