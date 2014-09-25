<?php

class AuthController extends BaseController {
    
    protected $_controllerName;
	
	public $rules	= array(
	'username'	=> 'required|min:5',
	'password'	=> 'required|min:5'
	);

	public function __construct()
    {
        $this->_controllerName   = 'auth';
		$this->beforeFilter( 'csrf', array( 'on' => 'post') ); 
    }
    
    public function showLogin()
	{	
        return View::make( $this->_controllerName . '.login' )
        ->with( 'method', 'post' );
	}
	public function actionLogout()
	{
		Auth::logout();
		return Redirect::to( '/' );
	}
    
    public function actionValidate()
    {
		$validator	= Validator::make( Input::all(), $this->rules);
		
		if( $validator->passes() )
		{
			if( Auth::attempt( array( 'username' => Input::get( 'username'), 'password' => Input::get( 'password' ) ) ) )
			{
			//	echo 'You are logged in';
				$userType	= Usertype::find( Auth::user()->id );
				if( Auth::user()->status == 0 )
				{
					Auth::logout();
					return Redirect::to( '/' );
				}
				Auth::user()->userType	= $userType->slug;
				return Redirect::to( 'dashboard' );
	
			}
			else
			{
				echo 'Login fail';
			}
		}
		else
		{
			return Redirect::to( 'login' );
			print_r( $validator->errors() );
			// Entries have failed. Echo error messages
		}
    }
    
    public function showForgotten()
    {
        return View::make( $this->_controllerName . '.forgotten' )
        ->with( 'method', 'post' );        
    }
	
	public function actionPrompt()
	{
		$validator	= Validator::make( Input::all(), array( 'userstring' => 'required' ) );
		
		if( $validator->passes() )
		{
			// Check that the userstring is either a valid email addy or a valid username
			$user	= User::where( 'username', '=', $userstr = Input::get( 'userstring' ) )->orwhere( 'email', '=', '$userstr')->get();
			if( count( $user ) > 0 )
			{
				// Send email with Nonce to reset
				
			}
			else
			{
				// Userstring not in db
			}
/*			
			$input	= Input::all();
			$user	= User::where( 'username', '=', $input['userstring'] )->orwhere( 'email', '=', $input['userstring'] )->first();
			$user->pwhash	= Hash::make( 'reset' );
			echo 'reset';*/
			
		}
	}
	
	public function showReset( $token = NULL )
	{
		
		$user	= User::where( 'nonce', '=', $token )->first();
		if( count( $user ) == 0 )
		{	
			return Redirect::to( 'answer/password/reset' );
		}
		else
		{
			return View::make( $this->_controllerName . '.reset' )
				->with( 'userId', $user->id )
				->with( 'method', 'post' );
		}
	}
	
	public function actionUpdate()
	{
		$input	= Input::all();
		$errors	= array();
		if( isset( $input['password'] ) )
		{
			if( $input['password'] != $input['passconf'] ) $errors['password']	= 'Password and Confirmation do not match.';
		}
		if( count( $errors) == 0 )
		{
			$user	= User::find( $input['userId'] );
			if( isset( $input['password'] ) ) $user->pwhash	= Hash::make( $input['password']  );
			$user->nonce	= Hash::make( time() );
			return Redirect::to( 'answer/user/update' );
			
		}
	}
	
	
	public function getAuthPassword()
	{
        return $this->pwhash;
    }
}