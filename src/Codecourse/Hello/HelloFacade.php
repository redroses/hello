<?php

namespace Codecourse\Hello;

use Illuminate\Support\Facades\Facade;

class HelloFacade extends Facade {

	protected static function getFacadeAccessor() {
		return 'hello';
	}

}
