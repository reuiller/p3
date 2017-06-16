<?php

class User{

	private $id;
	private $pseudo;
	private $pass;

	//liste des setters
	public function setPseudo($pseudo){
		//Je vérifie que le pseudo n'excède pas 20 caractères
		if(strlen($pseudo) > 20) {
			echo 'Le pseudo '.$pseudo.' est trop long';
		} else {
			$this->pseudo = $pseudo; 
		}			
	}		

	public function setPass($pass){
			$this->pass = $pass; 
		}			

	//liste des getters
		public function getId(){
			return $this->id;
		}

		public function getPseudo(){
			return $this->pseudo;
		}

}
