<?php 
include_once('./vendor/autoload.php');

include_once('fonctions/fonctions.php');
$tabActeurs=listerActeurs();
$nbActeurs=count($tabActeurs);

$m = new Mustache_Engine(array(
  'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/views/templates'),
));


?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Acteurs</title>
  
  <link rel="stylesheet" href="lib/materialize-css/css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
  
  <?php
  if($nbActeurs==0):
    echo "Il n'y a aucun acteur dans la base de données";
  else:
    echo "Il y a ".$nbActeurs." acteurs dans la base de données:";
    ?>
    <ul>
      <?php 
      foreach($tabActeurs as $acteur){
        echo $m->render('acteur_liste', $acteur);
      }
      ?>
    </ul>
    
    <?php 
  endif;
  ?>
  
  <?php 
  include("views/partials/footer.php");
  ?>
</body>
</html>
