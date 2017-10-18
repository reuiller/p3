<?php

class Router {
	
	private $url; // Contien l'URL sur laquelle on souhaite se rendre
	private $routes = []; // Contiendra la liste des routes

	public function __construct($url){
		$this->url = $url;
	}
/** Méthode GET
@parm URL à passer + la méthode à appeler lorsque cette URL est capturé
**/
	public function get($path, $callable){
		$route = new Route($path, $callable);
		$this->routes["GET"][] = $route;
		return $route; // On retounre la route pour "enchainer" les méthodes
	}
// A des fin de performance, on regroupe les routes par méthodes
	public function run(){
		if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
			throw new RouterException('REQUEST_METHOD does not exist');
		}
		foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
			if($route->match($this->url)){
            return $route->call();
        	}
   		}
    	throw new RouterException('No matching routes');
	}
	


}