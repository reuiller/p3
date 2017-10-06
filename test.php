<?php

//test

  $comment = new \Maxime\comment\Comment();    
	
	$comment->setAuthor('l\'auteur c\'est moi');

	echo $comment->getAuthor();

	var_dump($comment);

  var_dump(__DIR__);
