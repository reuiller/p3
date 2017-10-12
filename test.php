<?php

//test des routes

$router = new Router($_GET['url']); 
$router->get('/', function($id){ echo "Bienvenue sur ma homepage !</br>"; }); 
$router->get('/posts/:id', function($id){ echo "Voila l'episode $id"; }); 
$router->run();


//test

  $comment = new Comment();    
	
	$comment->setAuthor('l\'auteur c\'est moi');

	echo $comment->getAuthor();

	

  var_dump(__DIR__);
