
<?php

include('../app/bdd.php');

//Autoloader
function chargerClass($class){
	require '../app/class/'.$class.'.php';
}
spl_autoload_register('chargerClass');

//(voir compsoer autoload), revoir le chemin, ça doit focntionner quelque soit l'endori ou l'autoload est appélé




//test
    $comment = new Comment();    
	
	$comment->setAuthor('l\'auteur c\'est moi');

	echo $comment->getAuthor();

	var_dump($comment);

	