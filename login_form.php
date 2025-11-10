<?php
session_start();

// Vérifier s'il y a un message à afficher
if (isset($_SESSION['message'])) {
    echo "<script>alert('" . $_SESSION['message'] . "');</script>";
    unset($_SESSION['message']); // Supprimer le message après affichage
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Bijouterie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="login.css">
   
</head>
<body>

    <div class="inscription">
        <!-- Conteneur pour centrer le logo -->
        <div class="logo-container">
            <img src="images/1.png" alt="logo">
        </div>
    
        <div class="log">
            <form class="form" action="login.php" method="post">
                <h1>Chef de l'atelier</h1>
                <label for="nom">Nom:</label>
                <input type="text" name="nom" required>
                <label for="prenom">Prenom:</label>
                <input type="text" name="prenom"required>
                <label for="Mot de pass">Mot de pass:</label>
                <input type="password" name="mot_pass"required>
                <label for="role">Role:</label>
                <select name="role" required>
                 <option value="Chef">Chef d'atelier</option>
                  <!--  <option value="Fondeur">Fondeur</option>-->
                  <!--  <option value="Sertisseur">Sertisseur</option>-->
                 <!--   <option value="Polisseur">Polisseur</option>-->
                </select>
                
                <button class="btn btn-primary" type="submit">log-in</button>
            </form>
        </div>
    
        <div class="log">
            <form class="form" action="login.php" method="post">
                <h1>Opérateurs</h1>
                <label for="nom">Nom:</label>
                <input type="text" name="nom" required>
                <label for="prenom">Prenom:</label>
                <input type="text" name="prenom" required>
                <label for="Mot de pass">Mot de pass:</label>
                <input type="password" name="mot_pass" required>
                <label for="role">Role:</label>
                <select name="role" required>
                 <option value="Fondeur">Fondeur</option>
                <option value="Sertisseur">Sertisseur</option>
                <option value="Polisseur">Polisseur</option>
                </select>
                <button class="btn btn-primary" type="submit">log-in</button>
            </form>
        </div>
    </div>


</body>
</html>
