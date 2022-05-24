<?php 
include_once('./vendor/autoload.php');

include_once('fonctions/fonctions.php');
$tabActeurs=listerActeurs();
$nbActeurs=count($tableauActeurs);

$m = new Mustache_Engine(array(
  'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates'),
));


?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Acteurs</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
  <?php 
  foreach($tabActeurs as $acteur){
    echo $m->render('acteur_liste', $acteur);
  }
    ?>

  
  <?php 
  include("footer.php");
  ?>
</body>
</html>
