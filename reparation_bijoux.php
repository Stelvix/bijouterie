<?php
include_once("dashboard_chef.php");
?>
 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Bijoux</title>
    <style>
        form {
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
            padding: 2%;
            border-radius: 5px;
            height: 750px;
            background: #F5F5F5;
            /* Gris clair pour le formulaire */
            border: #D3D3D3 1px solid;
            /* Bordure gris clair */
        }

        label {
            color: #333333;
            /* Gris foncé pour les labels */
            font-size: 20px;
            margin-top: 10px;
        }

        input,
        textarea,
        select {
            padding: 10px;
            border-radius: 5px;
            border: #D3D3D3 1px solid;
            /* Bordure gris clair */
            height: 50px;
            margin-bottom: 10px;
            width: 50%;
            background: #FFFFFF;
            /* Fond blanc pour les champs */
            color: #000000;
            /* Texte noir */
        }

        textarea {
            height: 80px;
        }

        select {
            background: #FFFFFF;
        }

        button {
            padding: 10px;
            border-radius: 5px;
            border: none;
            height: 50px;
            margin-top: 10px;
            width: 50%;
            background: #B8860B;
            /* Or pour le bouton */
            color: #FFFFFF;
            font-size: 20px;
            cursor: pointer;
        }

        button:hover {
            background: #f39c12;
        }
    </style>
</head>
<body>
    <h1>Réparer un Bijoux</h1>
    <form action="reparation_bijoux_process.php" method="POST" enctype="multipart/form-data">
        <label for="type">Type de bijoux</label>
        <input type="text" name="type_bijoux" required>

        <label for="description">Description du bijoux</label>
        <textarea  name="description"></textarea>   
        
        <label for="image" >Image du bijoux</label>
        <input type="file" name="image" required>

        <label for="prix">Prix du bijoux estimé</label>
        <input type="text" name="prix_estime" required>

         <label for="prix">Prix du bijoux final</label>
        <input type="text" name="prix_final" required>

         <label for="etat">Réparer</label>
        <input class="form-check-input" name="etat" type="checkbox" value="réparé"/>
        

        <label for="id_metiers">Choisir un Opérateur</label>
        <select name="id_metiers">
            <option value="1">Fondeur</option>
            <option value="2">Sertisseur</option>
            <option value="3">Polisseur</option>
        </select>
        <button type="submit">Réparer</button>
    </form>
</body>
</html>
