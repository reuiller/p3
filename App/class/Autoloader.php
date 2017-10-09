<?php

namespace Maxime;

class Autoloader{

    static function register(){
        spl_autoload_register(array(Autoloader, 'autoload'));
    }


    static public function autoload($className){
        $className = str_replace(__NAMESPACE__ . '\\', '', $className);
        $className = str_replace('\\', '/', $className);
        require 'App/class/' . $className . '.php';
    }
}



//exécution de l'autoload.
\Maxime\Autoloader::register();