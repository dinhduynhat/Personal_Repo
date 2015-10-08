<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\User;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar,User $user)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;
		$this->user = $user;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

		
		public function postLogin()
	{
		$validator = Validator::make(Input::all(),
		                            ['name' => 'required',
									 'password' => 'required']
									);
									
		if($validator->fails())
		{
			return redirect('login')->withInput(Input::all())->with('login_error',$validator->errors());
		}
		else
		{
			$username = Input::get('name');
			$password = Input::get('password');
			if($this->auth->attempt(['email' => $username, 'password' => $password]) || $this->auth->attempt(['username' => $username, 'password' => $password]))
			{
				return redirect('/treelist/'.$this->auth->id());
			}
			else
			{
				return redirect('/login')->withInput()->with('login_check','Invalid Username or Password');
			}
		}
	}
	
}
