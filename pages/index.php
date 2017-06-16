
<?php

include('../app/bdd.php');

//Autoloader
function __autoload($className){
	require '../app/class/'.$className.'.php';
}

   $episode = new Episode();    
	
	$episode->setTitle('mon titre');

	var_dump($episode);

	$user = new User();

	$user->setPseudo('Maxime');

	var_dump($user);

	echo $user->getPseudo();

