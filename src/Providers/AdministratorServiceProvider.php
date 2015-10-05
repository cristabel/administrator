<?php namespace Cristabel\Administrator\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class AdministratorServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->registerIlluminateHtmlAndForm();
        $this->registerViews();
        $this->registerSidebarFacade();        
	}

	public function boot()
	{
        $this->exportConfig();
        $this->publishRoutes();

        $this->exportAssets();
	}

    protected function exportConfig()
    {
        $this->publishes([__DIR__.'/../Config' => config_path('cristabel')]);
    }

    protected function exportAssets()
    {
        $this->publishes([__DIR__.'/../../public/css' => public_path('packages/cristabel/css')]);
    }

    protected function publishRoutes()
    {
        include(__DIR__.'/../Http/routes.php');
    }

    protected function registerViews()
    {
        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'administrator');
    }

    protected function registerIlluminateHtmlAndForm()
    {
		$this->app->register('Illuminate\Html\HtmlServiceProvider');

    	AliasLoader::getInstance()->alias('HTML', 'Illuminate\Html\HtmlFacade');
    	AliasLoader::getInstance()->alias('Form', 'Illuminate\Html\FormFacade');
    }

    protected function registerSidebarFacade()
    {
        $this->app->bind('sidebar', function ($app) {
            return new \Cristabel\Administrator\Facades\Implementation\Sidebar;
        });

        $this->app->booting(function () {
            AliasLoader::getInstance()->alias('Sidebar', 'Cristabel\Administrator\Facades\SidebarFacade');
        });
    }

}
