
<?php

include('../app/bdd.php');

//Autoloader
function chargerClass($class){
	require '../app/class/'.$class.'.php';
}
spl_autoload_register('chargerClass');


//test
    $comment = new Comment();    
	
	$comment->setAuthor('l\'auteur c\'est moi');

	echo $comment->getAuthor();

	var_dump($comment);

	