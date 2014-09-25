<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
 *	Single Pages
 */
Route::get( '/', 'PageController@showWelcome' );
Route::get( '/register', 'PageController@showRegister' );
Route::get( '/dashboard', 'PageController@showDashboard' );

/**
 *	Authorisation Pages
 */

Route::get( '/login', 'AuthController@showLogin' );
Route::post( '/validate', 'AuthController@actionValidate' );
Route::get( '/forgotten', 'AuthController@showForgotten' );
//Route::get( '/register', 'AuthController@showRegister' );
Route::post( '/prompt', 'AuthController@actionPrompt' );
Route::get( '/password/reset/{token}', array( 'uses' => 'AuthController@showReset' ) );
Route::get( '/password/reset', array( 'uses' => 'AuthController@showReset' ) );
Route::post( 'auth/update', 'AuthController@actionUpdate' );
Route::get( '/logout', 'AuthController@actionLogout' );

/**
 *	Shop Pages
 */
Route::get( '/registration/shops', 'ShopController@showRegistration' );
Route::post( '/shops/register', 'ShopController@actionRegister' );
Route::get( '/admin/shops/{shopId}', array( 'uses' => 'ShopController@showList' ) );
Route::get( '/admin/shops', array( 'uses' => 'ShopController@showList' ) );
Route::post( '/shops/accept', 'ShopController@actionAccept' );
Route::get( '/shops/decline/{shopId}', array( 'uses' => 'ShopController@actionDecline' ) );
Route::get( '/shops/decline', array( 'uses' => 'ShopController@actionDecline' ) );


/**
 *	Publisher Pages
 */
Route::get( '/registration/publishers', 'PublisherController@showRegistration' );
Route::post( '/publishers/register', 'PublisherController@actionRegister' );
Route::get( '/admin/publishers/{pubId}',array( 'uses' => 'PublisherController@showList' ) );
Route::get( '/admin/publishers', array( 'uses' => 'PublisherController@showList' ) );
Route::get( '/publishers/decline/{pubId}', array( 'uses' => 'PublisherController@actionDecline' ) );
Route::get( '/publishers/decline', array( 'uses' => 'PublisherController@actionDecline' ) );
Route::post( '/publishers/accept', 'PublisherController@actionAccept' );
//Route::get( '/publishers/edit', 'PublisherController@showWelcome' );
//Route::get( '/publishers/delete', 'PublisherController@actionDelete' );

/**
 *	Answer Pages
 */
Route::get( 'answer/{collection}/{entry}', 'AnswerController@showAnswer' );



/*
Route::resource( 'region', 'RegionController' );
Route::resource( 'shop', 'ShopController' );
Route::resource( 'category', 'CategoryController' );
Route::resource( 'series', 'SeriesController' );
Route::resource( 'publisher', 'PublisherController' );
*/

/**
 *	Regions
 */

 Route::get( 'regions', 'RegionController@showWelcome' );
/*
Route::get( 'regions', function(){
	$regions	= Region::all();
	return View::make( 'regions.index' )
		->with( 'regions', $regions );
});*/

Route::get( 'regions/{id}', function($id){
	$region	= Region::find($id);
	$parent	= Region::find( $region->parentId );
	return View::make( 'regions.single' )
		->with( 'region', $region )
		->with( 'parent', $parent )
		->nest( 'header', 'common.header' )
		->nest( 'footer', 'common.footer' );		
})->where( 'id', '[0-9]+' );

Route::get( 'regions/create', function(){
	$region	= new Region;
	$parents	= Region::lists( 'name', 'id' );
	return View::make( 'regions.edit' )
		->with( 'region', $region )
		->with( 'parents', $parents )
		->nest( 'header', 'common.header' )
		->nest( 'footer', 'common.footer' )
		->with( 'method', 'post' );
});
Route::get( 'regions/{region}/edit', function( Region $region ){
	return View::make( 'regions.edit' )
		->with( 'region', $region )
		->with( 'method', 'put' )
		->nest( 'header', 'common.header' )
		->nest( 'footer', 'common.footer' );
});
Route::get( 'regions/{region}/delete', function( Region $region ){
	return View::make( 'regions.edit' )
		->with( 'method', 'delete' )
		->nest( 'header', 'common.header' )
		->nest( 'footer', 'common.footer' );
});
Route::post( 'regions', 'RegionController@create' );

Route::put( 'regions/{region}', function( Region $region ){
	$region->update( Input::all() );
	return Redirect::to( 'regions/' . $region->id )
		->with( 'message', 'Successfully updated region' );		
});
Route::delete( 'regions/{region}', function( Region $region ){
	$region->delete();
	return Redirect::to( 'regions' )
		->with( 'message', 'Successfully deleted region' );		
});

/**
 *	Publishers
 */
Route::get( 'publishers', 'PublisherController@showWelcome' );

/**
 *	Book elements
 */
Route::get( 'categories', 'CategoryController@showWelcome' );

/**
 *


/*
Route::get('/', function()
{
	return View::make('hello');
});
*/