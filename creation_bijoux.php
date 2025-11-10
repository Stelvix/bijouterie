<?php
include_once("dashboard_chef.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Bijoux</title>
 <link rel="stylesheet" href="creation_bijoux.css">
</head>

<body>
    <h1>Créer un Bijoux</h1> 
    <div class="form-text">
     <form action="creation_bijoux_process.php" method="POST" enctype="multipart/form-data">
        <label for="type">Type de bijoux</label>
        <input type="text" name="type_bijoux" required>

        <label for="description">Description du bijoux</label>
        <textarea name="description"></textarea>

        <label for="image">Image du bijoux</label>
        <input type="file" name="image" required>

        <label for="prix">Prix du bijoux</label>
        <input type="text" name="prix_estime" required>

        <label for="id_metiers">Choisir un Opérateur</label>
        <select name="id_metiers">
            <option value="1">Fondeur</option>
            <option value="2">Sertisseur</option>
            <option value="3">Polisseur</option>
        </select>

        <label for="etat">créer</label>
        <input class="form-check-input" name="etat" type="checkbox" value="créé"/>
        
        <button type="submit">Créer</button>
    </form>
    </div>
</body>

</html>