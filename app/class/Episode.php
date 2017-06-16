<?php

class Episode{

	private $id;
	private $title;
	private $episode;
	private $idPseudo;
	private $content;
	private $creationDate;

	//liste des setters
	public function setTitle($title){
		//On vérifie qu'il s'agit bien d'une chaîne de caractères.
		if (is_string($title)){
			$this->title = $title;
		}
	}

	public function setEpisode($episode){
	//Convertion de l'arguement en entier
		$episode = (int) $id;
		//On vérifie ensuite si le nombre est bien strictement positif
		if ($episode > 0){
			//Si c'est le cas, c'est tout bon, on assigne la valeur à l'attribut correspondant.
			$this->episode = $episode;
		}
	}

	public function setIdPseudo($id_pseudo){
		//On vérifie qu'il s'agit bien d'une chaîne de caractères.
		if (is_string($id_pseudo)){
			$this->idPseudo = $idPseudo;
		}
	}

	//liste des getters
	public function getId(){
		return $this->id;
	}

	public function getTitle(){
		return $this->title;
	}

	public function getEpisode(){
		return $this->episode;
	}

	public function getIdPseudo(){
		return $this->idPseudo;
	}

	public function getContent(){
		return $this->content;
	}

	public function getCreationDate(){
		return $this->creationDate;
	}

}