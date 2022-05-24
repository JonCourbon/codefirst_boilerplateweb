<?php 
include_once("fonctions/fonctions.php");
$donnees=array();


if(!isset($_GET["id"])){
  $donnees["status"]="erreur";
  $donnees["message"]="pas d'id d'acteur fourni";
}
else {
  $id=$_GET["id"];
  $acteur=lireInfoActeur($id);
  if(count($acteur)==0){
    $donnees["status"]="erreur";
    $donnees["message"]="aucun acteur avec cet id";
  }
  else{
    $donnees=$acteur;
    $donnees["status"]="OK";
  }
}


// encodage au format JSON
$donneesJson = json_encode($donnees, JSON_HEX_APOS);
// remplacement des \\n qui peuvent causer des erreurs en JavaScript
$donneesJson = str_replace("\\n", " ", $donneesJson);

// on écrit les données
echo $donneesJson;
 ?>