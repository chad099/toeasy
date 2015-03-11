<?php namespace Shekhar\ToEasy\Facades;

use Illuminate\Support\Facades\Facade;

class ToEasy extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'ToEasy'; }

	public static function rand($length, $type=null){
			switch($type){
				case 'charL':
					$chars = "abcdefghijklmnopqrstuvwxyz";
					break;
				case 'charU':
					$chars ="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
					break;
				case 'numbers':
					$chars ="0123456789";
					break;	
				default:
					$chars ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
					break;		
			}
				return substr(str_shuffle($chars),0,$length);
	   }
}