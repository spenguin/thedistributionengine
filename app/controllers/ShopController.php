<?php

class ShopController extends BaseController {
	
    protected $_controllerName; 

	public function __construct()
    {
        $this->_controllerName   = 'shops';
    }	

	public function showWelcome()
	{	

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
			'name'	=> 'required',
			'email'	=> 'required|email',
			'shopname'	=> 'required',
			'password'		=> 'required|confirmed',
			'password_confirmation'	=> 'required'
		);
		
		$inputs = array(
			'name'	=> Input::get( 'name' ),
			'email'	=> Input::get( 'email' ),
			'shopname'  => Input::get( 'shopname' ),
			'address'		=> Input::get( 'address' ),
			'password'		=> Input::get( 'password' ),
			'password_confirmation'	=> Input::get( 'confpass' )			
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
			$user->userTypeId	= Usertype::where( 'name', '=', 'Shop' )->select( 'id' )->first()->id;
			$user->save();
			
			$shop	= new Shop;
			
			$shop->name	= $inputs['shopname'];
			$shop->slug	= Str::slug( $inputs['shopname'] );
			$shop->userId	= $user->id;
			$shop->address	= $inputs['address'];
			$shop->save();
			
			return Redirect::to( 'answer/shop/pending' );
		 
		}//if it validates
        else
        {
            echo 'Well, that didn\'t work.';
        }
	}
	
	public function showList( $shopId = NULL )
	{
		$shops	= Shop::all();
		$shop	= ( !empty( $shopId ) ) ? Shop::find( $shopId ) : NULL;
		$regions	= Region::lists( 'name', 'id' );
		$status	= array( 'Inactive', 'Active' );
		return View::make( $this->_controllerName . '.list' )
		->with( 'shops', $shops )
		->with( 'shop', $shop )
		->with( 'status', $status )
		->with( 'regions', $regions )
		->with( 'method', 'post' );
	}
	
	public function actionDecline( $shopId = NULL )
	{
		if( empty( $shopId ) ) return Redirect::to( '/admin/shops' );
	}

	public function actionAccept()
	{
		$rules	= array(
			'shopId'	=> 'required'
		);
		
		$inputs	= Input::all();
		
		$validation = Validator::make($inputs, $rules);
		 
		if( $validation->passes() )
		{	
			$shop	= Shop::find( $inputs['shopId'] );
			if( $shop->status == 0 )	// If Publisher is inactive
			{
				//Send email
				$shop->status	= 1;
			}
			if( isset( $inputs['regionId'] ) ) $shop->regionId	= $inputs['regionId'];
			$shop->save();
			
			return Redirect::to( '/admin/shops' );
		}
		
	}	
	
}