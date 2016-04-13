<?php
namespace Tuta\TshopExt\Facades;

use Illuminate\Support\Facades\Facade;

class TshopExtFacade extends Facade {

	/**
	* Get the registered name of the component.
	*
	* @return string
	*/
	protected static function getFacadeAccessor()
	{
		return 'tshopext';
	}

}
