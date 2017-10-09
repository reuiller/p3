
<?php

class Autoloader
{
    /**
     * spl_autoload_register()
     */
    static function register()
    {
        spl_autoload_register(array('Autoloader', 'autoload'));
    }
    /**
     * @param $class_name
     */
    static function autoload($className)
    {
        $path = 'App/class/' . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
        if (file_exists($path)) 
        {
            require_once $path;
        }
    }
}

//exécution de l'autoload.
Autoloader::register();