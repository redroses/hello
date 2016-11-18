<?php

namespace Codecourse\Hello;

use Illuminate\Support\ServiceProvider;
use Codecourse\Hello\Hello;

class HelloServiceProvider extends ServiceProvider {

	public function register() {
		$this->app->singleton('hello', function($app) {
			return new Hello();
		});
	}

}
