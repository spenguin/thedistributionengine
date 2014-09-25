<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;



class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
	
	public static $rules	= array(
		'name'	=> 'required|alpha|min:2',
		'email'	=> 'required|email|unique|users',
		'password'	=> 'required|min:8'
	);
	
	protected $_controllerName;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	
	public function __construct()
    {
        $this->_controllerName   = 'user';
    }
	
	public function getAuthPassword() {
        return $this->pwhash;
    }
	
	
	public static function makeUsername( $name )
	{
		$name	= preg_replace( '/[^a-zA-Z ]/', '', $name );
		$name	= explode( ' ', strtolower( $name ) );
		return substr( $name[0], 0, 1 ) . $name[count( $name ) - 1 ];
		
	}
	
	public function getRememberToken()
	{
		return $this->remember_token;
	}
	
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}
	
	public function getRememberTokenName()
	{
		return 'remember_token';
	}	

}
