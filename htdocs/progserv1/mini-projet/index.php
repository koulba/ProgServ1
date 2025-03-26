<?php
require 'functions.php';

addPet("Caramel", "3");
addPet("Rex", "8");
addPet("Tweety", "1");
addPet("Godzilla", "4");

getPets();

updatePet("Rex", "9");

removePet("Tweety");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Page d'accueil | Gestionnaire d'animaux de compagnie</title>
</head>

<body>
    <h1>Page d'accueil du gestionnaire d'animaux de compagnie</h1>
    <p>Bienvenue sur la page d'accueil du gestionnaire d'animaux de compagnie !</p>
    <p>Utilise cette page pour visualiser et gérer tous les animaux de compagnie.</p>
    <p><a href="./create.php">Créer un animal</a></p>
    <p><a href="./view.php">Visualiser et modifier un animal</a></p>
</body>

</html>