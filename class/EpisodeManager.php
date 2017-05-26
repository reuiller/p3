<?php

class EpisodeManager{

	private $_bd;

	 public function __construct($db)
  {
    $this->setDb($db);
  }

	public function add(Personnage $perso){
		$q = $this->_db->prepare('INSERT INTO episode(title, episode, id_pseudo, content) VALUES(:title, :episode, :id_pseudo, :content)');

	    $q->bindValue(':title', $episode->title());
	    $q->bindValue(':episode', $episode->episode();
	    $q->bindValue(':id_pseudo', $episode->id_pseudo(), PDO::PARAM_INT);
	    $q->bindValue(':content', $episode->content();

	    $q->execute();
}
}