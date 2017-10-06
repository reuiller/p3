<?php

class Autoloader{

    static function register(){
        spl_autoload_register(array('Autoloader', 'autoload'));
    }


    static public function autoload($className){
        include 'App/class/' . $className . '.php';
    }
}

//exécution de l'autoload
Autoloader::register();