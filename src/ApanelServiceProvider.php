<?php namespace Svargos\Apanel;

use Illuminate\Support\ServiceProvider;

class ApanelServiceProvider extends ServiceProvider {

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

	    die ('Here Boot');// Debug by SvaRgoS

	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{


	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
