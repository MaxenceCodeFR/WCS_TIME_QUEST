<?php
$presentTime = new DateTime('now'); // Création d'une variable de la date actuelle
$destinationTime = new DateTime('2153-02-12'); // Creation d'une varabiable de la date cible
$interval = $presentTime->diff($destinationTime); //Création d'une variable de différence entre la date actuelle et la cible
//Il ne reste plus qu'a affiché ces dates au bon format
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- On affiche en premier la date de la destination avec 'AM = A et g:i = heure en 012 et minutes' -->
    <h1><?= $destinationTime->format('M d Y h A g:i'); ?> <br></h1>
    <!-- On affiche ensuite la même chose pour le temps présent -->
    <h1><?= $presentTime->format('M d Y h A g:i'); ?><br></h1>
    <!-- Et pour finir on affiche la différence en affichant ex: 200ans 4mois etc -->
    <h1><?= $interval->format('%yans %mmois %djours %hheures et %iminutes'); ?><br></h1>
</body>

</html>