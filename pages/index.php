
<?php

include('../app/bdd.php');

//Autoloader
function __autoload($class_name){
	require '../app/class/'.$class_name.'.php';
}

// On admet que $db est un objet PDO.
$test = $bdd->query('SELECT id, title, episode, id_pseudo, content, creation_date FROM episode');
    
	return ($test);

   $episode = new Episode();

    var_dump($episode);
	