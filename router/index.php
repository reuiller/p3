<?php

$url = '';
if(isset($_GET['url'])) {
	$url = $_GET['url'];
}

if($url == ''){
	require 'home.php';
} elseif (preg_match('#episode-([0-9]+)#', $url, $params)) {
	$idEpisode = $params[1];
	require 'episode.php';
} else {
	require '404.php';
}


/*$url = '';
if(isset($_GET['url'])) {
	$url = explode('/', $_GET['url']);
}

if($url == ''){
	require 'home.php';
} elseif($url[0] == 'episode' AND !empty($url[1])) {
	$idArticle = $url[1];
	require 'episode.php';
} else {
	require '404.php';
}*/
