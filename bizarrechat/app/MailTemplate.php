<?php namespace App;

#use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class MailTemplate extends Model{

	#use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'mail_template';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	 
	 
	     

	
	
	#protected $fillable = ['firstname', 'email', 'password','verify_token'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	#protected $hidden = ['password', 'remember_token'];
	
	
}
