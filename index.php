<?php

include('App/bdd.php');


//Autoloader
require 'App/class/Autoloader2.php';

//Le fichier des tests
require 'test.php';

/**
function chargerClass($class){
	require __DIR__.'/app/class/'.$class.'.php';
}
spl_autoload_register('chargerClass');
**/

//(voir compsoer autoload), revoir le chemin, ça doit fonctionner quelque soit l'endori ou l'autoload est appélé

//require_once("App/class/Autoloader.php");



/*Router................

  $url = '';
if(isset($_GET['url'])) {
  $url = $_GET['url'];
}

if($url == ''){
  require 'home.php';
} elseif (preg_match('#episode-([0-9]+)#', $url, $params)) {
  $idEpisode = $params[1];
  require 'episode.php';
} else {
  require '404.php';
}

*/
?>




<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


<form action="createEpisode.php" method="post" class="form-horizontal">

  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">Titre</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="title" placeholder="Mon titre" name="title">
    </div>
  </div>

  <div class="form-group">
    <label for="episode" class="col-sm-2 control-label">Numéro de l'épisode</label>
    <div class="col-sm-8">
      <input type"int" class="form-control" id="episode" placeholder="Mon numéro d'épisode" name="episode">
    </div>
  </div>

  <div class="form-group">
    <label for="content" class="col-sm-2 control-label">Contenu</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="title" placeholder="Mon contenu" name="content">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-default">Enregistrer</button>
    </div>
  </div>

</form>


</body>
</html>

	