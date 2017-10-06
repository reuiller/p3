<?php

//test
  $comment = new Comment();    
	
	$comment->setAuthor('l\'auteur c\'est moi');

	echo $comment->getAuthor();

	var_dump($comment);

  var_dump(__DIR__);
