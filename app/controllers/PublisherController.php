<?php

class PublisherController extends BaseController {
	
    protected $_controllerName; 

	public function __construct()
    {
        $this->_controllerName   = 'publishers';
    }	

	public function showWelcome()
	{	
		$publishers	= Publisher::all();
		return View::make( $this->_controllerName . '.list' )
        ->with( 'publishers', $publishers );
	}
	
	public function showRegistration()
	{
        return View::make( $this->_controllerName . '.register' )
        ->with( 'method', 'post' );		
	}
	
	public function actionRegister()
	{
		/*
		 * Validate
		 */
		$rules = array(
			'image' => 'image|max:300',
			'name'	=> 'required',
			'email'	=> 'required|email',
			'companyname'	=> 'required',
			'password'		=> 'required|confirmed',
			'password_confirmation'	=> 'required'
		);
		 
		$inputs = array(
			'image' => Input::file( 'image' ),
			'name'	=> Input::get( 'name' ),
			'email'	=> Input::get( 'email' ),
			'companyname'	=> Input::get( 'companyname' ),
			'address'		=> Input::get( 'address' ),
			'password'		=> Input::get( 'password' ),
			'password_confirmation'	=> Input::get( 'passconf' )
		);
		
		$validation = Validator::make($inputs, $rules);
		 
		if( $validation->passes() )
		{	
			//	Insert into Users table
			$user	= new User;
			$user->name	= $inputs['name'];
			$user->username	= User::makeUsername( $inputs['name'] );
			$user->email	= $inputs['email'];
			$user->pwhash	= Hash::make( $inputs['password'] );
			$user->nonce	= Hash::make( time() );
			$user->userTypeId	= Usertype::where( 'name', '=', 'Publisher' )->select( 'id' )->first()->id;
			$user->save();
			
			$pub	= new Publisher;
			
			$pub->name	= $inputs['companyname'];
			$pub->slug	= Str::slug( $inputs['companyname'] );
			$pub->userId	= $user->id;
			$pub->address	= $inputs['address'];
			$pub->save();
			
			$asset	= new Asset;
			$asset->name			= time() . '.' . $inputs['image']->getClientOriginalExtension();	
			$asset->originalName	= $inputs['image']->getClientOriginalName();
			$asset->filesize		= $inputs['image']->getSize();
			$asset->ownerId			= $pub->id;
			$asset->assetTypeId		= 1;
			$asset->save();
			
			// Move and rename image to assets folder
			$destinationPath	= $_SERVER['DOCUMENT_ROOT'] . '/laravel/public/assets/';
			
			$inputs['image']->move( $destinationPath, $asset->name );
			
			return Redirect::to( 'answer/publisher/pending' );
		 
		}//if it validates
		else
		{
			echo 'Did not validate';
		}
	}
	
	public function showList( $pubId = NULL )
	{	
        $publishers	= Publisher::all();
		$publisher	= ( !empty( $pubId ) ) ? Publisher::find( $pubId ) : NULL;
		$status		= array( 'Inactive', 'Active' );
		return View::make( $this->_controllerName . '.list' )
		->with( 'publishers', $publishers )
		->with( 'publisher', $publisher )
		->with( 'status', $status )
        ->with( 'method', 'post' );			
	}
	
	public function actionDecline( $pubId = NULL )
	{
		if( empty( $pubId ) ) return Redirect::to( '/admin/publishers' );
	}
	
	public function actionAccept()
	{
		$rules	= array(
			'publisherId'	=> 'required'
		);
		
		$inputs	= Input::all();
		
		$validation = Validator::make($inputs, $rules);
		 
		if( $validation->passes() )
		{	
			$publisher	= Publisher::find( $inputs['publisherId'] );
			if( $publisher->status == 0 )	// If Publisher is inactive
			{
				//Send email
				$publisher->status	= 1;
			}
			$publisher->save();
			
			return Redirect::to( '/admin/publishers' );
		}
		
	}

}