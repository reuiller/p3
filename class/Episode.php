<?php

class Episode {

	private $_id;
	private $_title;
	private $_episode;
	private $_id_pseudo;
	private $_content;
	private $_creation_date;

	//liste des getters
	public function id(){
		return $this->_id;
	}

	public function title(){
		return $this->_title;
	}

	public function episode(){
		return $this->_episode;
	}

	public function id_pseudo(){
		return $this->_id_pseudo;
	}

	public function content(){
		return $this->_content;
	}

	public function creation_date(){
		return $this->_creation_date;
	}

	//liste des setters
	public function setId($id){
		//Convertion de l'arguement en entier
		$id = (int) $id;
		//On vérifie ensuite si le nombre est bien strictement positif
		if ($id > 0){
			//Si c'est le cas, c'est tout bon, on assigne la valeur à l'attribut correspondant.
			$this->_id = $id;
		}
	}

	public function setTitle($title){
		//On vérifie qu'il s'agit bien d'une chaîne de caractères.
		if (is_string($title)){
			$this->_title = $title;
		}
	}

	public function setEpisode($episode){
	//Convertion de l'arguement en entier
		$episode = (int) $id;
		//On vérifie ensuite si le nombre est bien strictement positif
		if ($episode > 0){
			//Si c'est le cas, c'est tout bon, on assigne la valeur à l'attribut correspondant.
			$this->_episode = $episode;
		}
	}

	public function setIdPseudo($id_pseudo){
		//On vérifie qu'il s'agit bien d'une chaîne de caractères.
		if (is_string($id_pseudo)){
			$this->_id_pseudo = $id_pseudo;
		}
	}

	// Méthodes
	public function afficherTitre(){
		return $this->titre;
	}

	public function afficherEpisode(){
		echo $this->episode;
	}

	public function afficherContenu(){
		echo $this->contenu;
	}

	public function afficherDateCreation(){
		echo $this->dateCreation;
	}
}