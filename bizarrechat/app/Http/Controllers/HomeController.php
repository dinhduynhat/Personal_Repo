<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}
	
		
	
	public function login()
	{
		return view('auth/login');
	}

	

}
