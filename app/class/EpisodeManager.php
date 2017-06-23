<?php

class EpisodeManager{

	/** @var \PDO $pdo objet PDO lié à la bdd "billets-simple49380". Comme la "conexion" 
	va être utilisée dans plusieurs
	* méthode, il est utile de stocker dans une varianle d'objet
	*/ 
	private $pdo;
	/** EpisodeManager constructor.

	Initialisation de la connexion à la base 
	de donnée **/
	public function __construct($db){
		$this->pdo = new PDO('mysql:host=localhost;dbname=billet-simple49380','root','');
    
  }

	/** Insert un objet Episode dans la bdd 
	et met à jour l'objet passé en arguement 
	en lui spécifiant un identifiant

	@param Episode $episode est un type d'objet 
	passé par référence

	@return bool true si l'objet a été inéré,
	false si une erreur survient **/
	public function create(Episode &$episode)
	{
		$this->pdoStatement = $this->pdo->prepare('INSERT INTO episode 
			VALUES (NULL, :title, :episode, NULL, :content, :creationDate)');

		//liaison des paramètres
		$this->pdoStatement->bindValue(':title', $episode->getTitle(), PDO::PARAM_STR);
		$this->pdoStatement->bindValue(':episode', $episode->getEpisode(), PDO::PARAM_INT);
		$this->pdoStatement->bindValue(':content', $episode->getContent(), PDO::PARAM_STR);
		$this->pdoStatement->bindValue(':creationDate', $episode->getCreationDate());

		//exécution de la requête
		$this->pdoStatement->execute();
		if(!$executeIsOk){
			return false;
		}
			else{
			$id = $this->pdo->lastInsertId();
			$episode = $this->read($id);
				return true;
			}
	}

	/** Récupère un objet Episode à partir de son 
	identifiant

	@param int $id identifiant d'un épisode

	@return bool|Episode|null false si une erreur 
	survient, un objet Episode si une correspondance
	est rouvée, Null s'il n'y a aucune correspondance **/
	public function read($id){
		$this->pdo->prepare('SELECT * FROM episode WHERE id = :id');
		
		//liaison des paramètres
		$this->pdoStatement->bindValue(':id', $is, PDO::PARAM_INT);
		
		//exécution de la requête
		$executeIsOk = $this->pdoStatement->execute();
		
		if($executeIsOk){
			//récupèration de notre résultat
			$episode = $this->pdoStatement->fechObject('Episode'); //Pas sure de moi pour le "Episode" à la fin

			if($episode === false){
				return null;

			} else{
				return $episode;
			} 
		}
		else{
			//erreur d'exécution
			return false;

			}
	 	}

	/** Met à jour un objet stocké en bdd

	@param Episode $episode objet de type Episode

	@return bool true en cas de succès ou false en 
	cas d'erreur **/

	public function update (Episode $episode){
		$this->pdoStatement = $this->pdo->prepare('UPDATE episode 
			set title=:title, episode=:episode, content=:content, creationDate=:creationDate where id=:id LIMITE 1');
		
		$this->pdoStatement->bindValue(':title', $episode->getTitle(), PDO::PARAM_STR);
		$this->pdoStatement->bindValue(':episode', $episode->getEpisode(), PDO::PARAM_STR);
		$this->pdoStatement->bindValue(':content', $episode->getContent(), PDO::PARAM_STR);
		$this->pdoStatement->bindValue(':creationDate', $episode->getCreationDate(), PDO::PARAM_STR);
		$this->pdoStatement->bindValue(':id', $episode->getId(), PDO::PARAM_INT);
	
		//execution de la requête

		return $this->pdoStatement->execute();		

	}

	/** Supprime un objet stocké en bdd

	@param Episode $episode objet de type Episode

	@return bool true en cas de succès ou false en 
	cas d'erreur **/
	public function delete (Episode $episode){

		$this->pdoStatement = $this->pdo->prepare('DELETE FROM episode WHERE id = :id LIMIT 1');
		$this->pdoStatement->bindValue(';id', $episode->getId(), PDO::PARAM_INT);

		//exécution de la requête
		return $this->pdoStatement->execute();
	}

	/** Récupère tous les objets Episode de la bdd

	@param /

	@return array|bool tableau d'objet Episode ou 
	un tableau vide s'il n'y a aucun objet dans 
	la bdd, ou false si une erreur survient **/
	public function readAll(){
		$this->pdoStatement = $this->pdo->query('SELECT * FROM episode ORDER BY idEpisode'); //Pas sure de moi pour le "idEpisode" à la

		//construction d'un tableau d'objet de type Episode
		$episode = [];

		while($episode = $this->pdoStatement->fechObject('Episode')){
			$episode[] = $episode;
		}

		return $episode;

	}
}