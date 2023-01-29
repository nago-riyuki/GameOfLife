<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Réservé</title>
</head>
<body>

<?php

include 'menu.php';


if(isset($_SESSION['connected'])){
    if($_SESSION['connected']){
        echo "Accès autorisé à la page.";
    }
    else{
        echo "Veuillez vous connecter, merci.";
    }
}

?>
    
</body>