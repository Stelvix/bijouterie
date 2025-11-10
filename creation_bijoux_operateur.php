

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
            height: 700px;
            background: #F5F5F5;
             border: #D3D3D3 1px solid;
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
    <h1>Créer un Bijoux</h1> 
    <div class="form-text">
     <form action="creation_bijoux_operateur_process.php" method="POST" enctype="multipart/form-data">
        <label for="type">Type de Matériel utilisé</label>
        <input type="text" name="type_materiaux" required>

        <label for="description">Description du bijoux</label>
        <textarea name="description"></textarea>

        <label for="etat">Créer</label>
        <input class="form-check-input" name="statut" type="checkbox" value="travail fait"/>

          <label for="image">Image du bijoux</label>
        <input type="file" name="images" required>

        
        <button type="submit">Créer</button>
   <a href="missions.php"><button class="btn btn-primary" type="submit">Retour</button></a> 

    </form>
    </div>
</body>

</html>