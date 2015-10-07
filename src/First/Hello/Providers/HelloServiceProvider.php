<?php

namespace First\Hello\Providers;

use First\Hello\Hello;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->singleton('hello', function ($app) {
			return new Hello;
		});
	}
}