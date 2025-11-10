

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valider et Donner un prix</title>
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

 <?php 
// connection a la bdd
include_once("connection.php");

// Requête SQL pour récupérer les bijoux
$req = "SELECT * FROM tasks";
$stmt = $pdo->prepare($req); // Utilisation de $pdo qui est la variable de la connexion PDO
$stmt->execute();  // Exécution de la requête
$resultats = $stmt->fetchAll();  // Récupération de tous les résultats

if (count($resultats) > 0) {
    foreach ($resultats as $resultat) {
?>

<h1>Valider et Donner un prix</h1> 
<div class="form-text">
    <form action="#" method="POST" enctype="multipart/form-data">
        <label for="type">Type de matériel</label>
        <input type="text" name="type_materiaux" value="<?php echo htmlspecialchars($resultat['type_materiaux']) ?>" required>

        <label for="description">Description du bijou</label>
        <textarea name="description"><?php echo htmlspecialchars($resultat['description']) ?></textarea>

        <label for="image">Image du bijou</label>
        <input type="file" name="images" required>

        <label for="prix">Prix du bijou</label>
        <input type="text" name="prix_estime" value="<?php echo htmlspecialchars($resultat['prix_estime']) ?>" required>

        <label for="etat">Statut</label>
<input type="hidden" name="statut" value="non validé"> <!-- Valeur par défaut -->
<input type="checkbox" name="statut" value="validé">


        <button type="submit">Créer</button>
    </form>
</div>


<?php
    }
} else {
    echo "Aucun résultat trouvé.";
}
?>
 