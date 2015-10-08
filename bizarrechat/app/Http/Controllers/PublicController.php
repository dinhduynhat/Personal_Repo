<?php namespace App\Http\Controllers;
use App\User;

class PublicController extends Controller {

	public function __construct()
	{
		$this->middleware('guest');
	}

	

	public function fetch()
	{
		
		$user = User::find(1);
		return 'The answer is'.$user;
	}

}
