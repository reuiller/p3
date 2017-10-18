<?php
namespace Maxime\Episode;

class Episode{

	protected $id; // @var int $id identifiant de l'épisode (généré automatiquement par le SGBDR, donc pas de de setter à prévoir)
	protected $title; // @var string $title titre de l'épisode
	protected $episode; // @var string $episode contenu de l'épisode
	protected $idPseudo; // @var int $idPseudo identifiant de l'utilisateur (généré automatiquement par le SGBDR, donc pas de de setter à prévoir)
	protected $content;
	protected $creationDate;

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

	public function setContent($content){
		//On vérifie qu'il s'agit bien d'une chaîne de caractères.
		if (is_string($title)){
			$this->content = $content;
		}
	}

	public function setCreationDate($creationDate){	
		$this->creationDate = $creationDate;
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