<?php

namespace Maxime;

class Autoloader
{
    /**
     * spl_autoload_register()
     */
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    /**
     * @param $class_name
     */
    static function autoload($className)
    {
        $path = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
        $path = str_replace(__NAMESPACE__.'\\','', $path);
        if (file_exists($path)) 
        {
            require_once $path;
        }
    }
}