<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	 
	 
	     public function setpasswordAttribute($value)
    {
        $this->attributes['password'] = \Hash::make($value);
    }

	
	
	protected $fillable = ['quickblox_id', 'firstname', 'email', 'password','verify_token', 'password_raw'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];
	
	
	public static $RegisterRule = array(
        'quickblox_id' =>  array('required','unique:users'),
		'firstname' =>  array('required'),
        'email' => array('required','unique:users'), 
        'password' => 'required', 
		);

}
