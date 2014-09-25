<?php

class CreatorController extends BaseController {

    protected $_controllerName; 

	public function __construct()
    {
        $this->_controllerName   = 'creators';
    }
    
	public function showWelcome()
	{	
		$creators	= Creator::all();
		return View::make( $this->_controllerName . '.list' )
        ->with( 'creators', $creators );
	}    

}