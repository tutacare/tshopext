<?php

namespace Tuta\TshopExt;

use Illuminate\Support\ServiceProvider;

class TshopExtServiceProvider extends ServiceProvider
{
    protected $defer = false;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    $this->app['tshopext'] = $this->app->share(function($app)
		{
			return new TshopExt;
		});
      $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('TshopExt', 'Tuta\TshopExt\Facades\TshopExtFacade');
        });
    }

    public function provides()
  	{
  		return array('tshopext');
  	}
}
