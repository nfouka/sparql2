<?php

namespace First\Hello\Facades;

use Illuminate\Support\Facades\Facade;

class Hello extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'hello';
	}
}