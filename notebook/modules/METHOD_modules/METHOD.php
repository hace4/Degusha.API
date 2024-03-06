<?php

namespace modules\METHOD_modules;

class method
{
    /**
     *@hace4
     *@param json $message  server answer 
     */
    public static $message = '';
    public static function uri($path){
        return $_SERVER['REQUEST_SCHEME']. '://' . $_SERVER['SERVER_NAME'].':81/' . "$path" ;
    }
}
