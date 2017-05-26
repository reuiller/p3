
<?php

include('bdd.php');

//Autoloader
function __autoload($class_name){
	require 'class/'.$class_name.'.php';
}

   $episode = new Episode();

    var_dump($episode);
	