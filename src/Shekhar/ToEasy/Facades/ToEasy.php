<?php namespace Shekhar\ToEasy\Facades;

use Illuminate\Support\Facades\Facade;

class ToEasy extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'ToEasy'; }

	public static function rand($length){
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
			return substr(str_shuffle($chars),0,$length);
	   }
}