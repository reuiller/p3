<?php

namespace Maxime\comment;

class Comment{

	protected $id;
	protected $idEpisode;
	protected $author;
	protected $content;
	protected $dateComment;

	//liste des setters
	public function setIdEpisode($idEpisode){
		$this->idEpisode = $idEpisode; 
		}			

	public function setAuthor($author){
		$this->author = $author; 
		}			

	public function setContent($content){
			$this->content = $content; 
		}	

	public function setDateComment($dateComment){
			$this->dateComment = $dateComment; 
		}		

	//liste des getters	
		public function getIdEpisode(){
			return $this->idEpisode;
		}

		public function getAuthor(){
			return $this->author;
		}

		public function getContenthor(){
			return $this->content;
		}

		public function getDateComment(){
			return $this->dateComment;
		}

}
