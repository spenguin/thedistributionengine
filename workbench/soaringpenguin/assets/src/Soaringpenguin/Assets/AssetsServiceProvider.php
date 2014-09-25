<?php namespace Soaringpenguin\Assets;

use Illuminate\Support\ServiceProvider;

class AssetsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package( 'soaringpenguin/assets' );
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->booting( function()
		{
			$loader	= \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias( 'Assets', 'Soaringpenguin\Assets\Facades\Assets' );
		});
		$this->app['assets']	= $this->app->share( function( $app )
		{
			return new Assets;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array( 'assets' );
	}

}
