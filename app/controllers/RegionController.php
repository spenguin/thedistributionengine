<?php

class RegionController extends BaseController {

	public function showWelcome()
	{	
		$regions	= Region::all();
//		$regions	= $this->hierarchy( $regions );
		$region	= new Region;
		$parents	= Region::lists( 'name', 'id' );		
		return View::make( 'regions.index' )
			->with( 'regions', $regions )
			->with( 'region', $region )
			->with( 'parents', $parents )
			->with( 'method', 'post' )
			->with( 'pageTitle', array( 'The', 'Regions' ) );
		
//		return View::make( 'regions.index' );
	}
    
    public function index()
    {
        	$regions	= Region::all();
			return View::make( 'regions.index' )
				->with( 'regions', $regions );
		
//		return View::make( 'regions.index' );
    }
	
	
	public function create()
	{	
/*		$rules	= array(
			'name'			=> 'required|AlphaNum',
			'description'	=> 'AlphaNum'
		);*/
		$rules	= array();
		
		$validation	= Validator::make( Input::all(), $rules );
		if( $validation->fails() )
		{	
			return Redirect::to( 'regions/create' )
				->withErrors( $validation )->withInput();
		}
		$input	= Input::all();
		$input['slug']	= $this->createSlug( $input['name'] );
		
		$region	= Region::create( Input::all() );
		return Redirect::to( 'regions/' . $region->id )
			->with( 'message', 'Successfully created region' );		
	}
	
	private function createSlug( $name )
	{
		$flag	= FALSE;
		$slug	= Str::slug( $name );
		$region	= new Region;
		while( $flag == FALSE )
		{
			$res	= $region->checkSlug( $slug );
			if(  $res == 0 ) return $slug;
			$slug	.= rand( 0, 9 );
		}
	}
	
	/**
	 *	Organise the regions into parent elements
	 *
	 *	@param $regions (array)
	 *	@return array
	 */
	
	function hierarchy( $regions )
	{
		$o	= array();
		foreach( $regions as $r )
		{
			if( !isset( $o[$r['parentId']] ) ) $o[$r['parentId']]	= array();
			$o[$r['parentId']][]	= $r;
		}
		return $o;
	}
	
/*	function hierarchy( $regions, $parent=0, $depth=0 )
	{
		if($depth > 1000) return ''; // Make sure not to have an endless recursion
		$tree = '<ul>';
		for($i=0, $ni=count( $regions ); $i < $ni; $i++){
			if( $regions[$i]['parentId'] == $parent){
				$tree .= '<li>';
				$tree .= '<a href="regions/' . $regions[$i]['id'] . '">';
				$tree .= $regions[$i]['name'];
				$tree .= '</a>';
				$tree .= $this->hierarchy($regions, $regions[$i]['id'], $depth+1);
				$tree .= '</li>';
			}
		}
		$tree .= '</ul>';
		return $tree;
	}*/

}


/*			function(){

	
	
	

	
	$region	= Region::create( Input::all() );
	return Redirect::to( 'regions/' . $region->id )
		->with( 'message', 'Successfully created region' );
});*/
