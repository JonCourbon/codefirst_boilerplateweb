<?php

function lireInfoActeur($id){
	include_once("../config/config.php");
	$bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$dbname,$user, $password); 
  
  $resultats=$bdd->query('SELECT id,nom FROM acteur WHERE id='.$id);
  $acteur=$resultats->fetch(PDO::FETCH_ASSOC);
  $resultats->closeCursor();
  return $acteur;
}
?>
