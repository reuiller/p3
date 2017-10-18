<?php
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
        echo "path $path";
        if (file_exists($path)) 
        {
            require_once $path;
        }
    }
}

var_dump($path);

Autoloader::register();

