<?php

class CategoryController extends BaseController {
    
    protected $_controllerName; 

	public function __construct()
    {
        $this->_controllerName   = 'categories';
    }
    
    public function showWelcome()
	{	
        return View::make( $this->_controllerName . '.index' );
		
	}
}