
<?php

include('bdd.php');

//Autoloader
function __autoload($class_name){
	require 'class/'.$class_name.'.php';
}

// On admet que $db est un objet PDO.
$test = $bdd->query('SELECT id, title, episode, id_pseudo, content, creation_date FROM episode');
    
while ($donnees = $request->fetch(PDO::FETCH_ASSOC)) // Chaque entrée sera récupérée et placée dans un array.
{
  // On passe les données (stockées dans un tableau) concernant le personnage au constructeur de la classe.
  // On admet que le constructeur de la classe appelle chaque setter pour assigner les valeurs qu'on lui a données aux attributs correspondants.
 
   $episode = new Episode();

    var_dump($episode);
        
  echo $perso->nom(), ' a ', $perso->forcePerso(), ' de force, ', $perso->degats(), ' de dégâts, ', $perso->experience(), ' d\'expérience et est au niveau ', $perso->niveau();
}
	