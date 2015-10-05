<?php namespace Cristabel\Administrator\Facades;

use Illuminate\Support\Facades\Facade;

class SidebarFacade extends Facade {

    protected static function getFacadeAccessor() 
    {
		return 'sidebar';
	}

}
