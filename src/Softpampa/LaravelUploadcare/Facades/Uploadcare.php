<?php namespace Softpampa\LaravelUploadcare\Facades;

use Illuminate\Support\Facades\Facade;

class Uploadcare extends Facade {

	protected static function getFacadeAccessor(){
		return 'uploadcare';
	}

}
