<?php

function listerActeurs(){
	include_once("config/config.php");
	$bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$dbname,$user, $password); 
  
  $resultats=$bdd->query('SELECT * FROM acteur ORDER BY nom');
  $tableau=$resultats->fetchAll();
  $resultats->closeCursor();
  return $tableau;
}
?>
