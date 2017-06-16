<?php

use Episode;

class EpisodeManager{

	private $pdo;

	public function __construct($db){
    
  }

	/** Insert un objet Episode dans la bdd 
	et met à jour l'objet passe en arguement 
	en lui spécifiant un identifiant

	@param Episode $episode est un type d'objet 
	passé par référence

	@return bool true si l'objet a été inéré,
	false si une erreur survient **/
	public function create(Episode $episode){

	}

	/** Récupère un objet Episode à partir de son 
	identifaint

	@param int $id identifiant d'un épisode

	@return bool|Episode|null false si une erreur 
	survient, un objet  Episode si uen correspondance
	est rouvée, Null s'il n'y a aucune correspondance **/
	public function read($id){


	}

	/** Met à jour un objet stocké en bdd

	@param Episode $episode objet de type Episode

	@return bool true en cas de succès ou false en 
	cas d'erreur **/
	public function update(Episode $episode){

	}

	/** Supprime un objet stocké en bdd

	@param Episode $episode objet de type Episode

	@return bool true en cas de succès ou false en 
	cas d'erreur **/
	public function delete (Episode $episode){
		
	}

	/** Récupère tous les objets Episode de la bdd

	@param /

	@return array|bool tableau d'objet Episode ou 
	un tableau vide s'il n'y a aucun objet dans 
	la bdd, ou false si une erreur survient **/
	public function readAll(){

	}
}