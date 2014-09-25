<?php

class PageController extends BaseController {

    protected $_controllerName; 

	public function __construct()
    {
        $this->_controllerName   = 'pages';
    }	
    
    public function showWelcome()
	{	
        $publishers	= Publisher::all();
		$logos		= Asset::where( 'assetTypeId', 1 )->get( array( 'id', 'name', 'ownerId' ) );
		$logos		= $this->makeArray( $logos, 'ownerId' );
		
		return View::make( $this->_controllerName . '.index' )
		->with( 'publishers', $publishers )
		->with( 'logos', $logos);
	}
	
	public function showRegister()
	{
		return View::make( $this->_controllerName . '.register' );
	}
	
	public function showDashboard()
	{	
		return View::make( $this->_controllerName . '.dashboard' );
	}
	
	public function makeArray( $object, $keyId )
	{
		$o	= array();
		foreach( $object as $ob )
		{
			$o[$ob[$keyId]]	= $ob;
		}
		return $o;
	}
}