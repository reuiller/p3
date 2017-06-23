<?php

//Autoloader
function chargerClass($class){
	require '../app/class/'.$class.'.php';
}
spl_autoload_register('chargerClass');
//(voir compsoer autoload), revoir le chemin, ça doit focntionner quelque soit l'endori ou l'autoload est appélé


//Création d'un objet contact à partir des donnés du formulaire
$episode = new Episode();
$episode->setTitle($_POST['title'])
	->setEpisode($_POST['episode'])
	->setContent($_POST['content'])

	//insertion en bdd via le manager
	$episodeManager = new episodeManager();
	$epsiodeManager->create($episode);
