<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Style général du message de succès */
.success-message {
    background-color: #4CAF50; /* Vert clair */
    color: white; /* Texte blanc */
    font-size: 24px;
    font-weight: bold;
    padding: 20px;
    margin: 50px auto;
    width: 60%;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    animation: slideIn 1s ease-out; /* Animation d'entrée */
}

/* Animation pour faire apparaître le message */
@keyframes slideIn {
    0% {
        transform: translateY(-30px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Style pour un message d'erreur (si nécessaire) */
.error-message {
    background-color: #f44336; /* Rouge pour l'erreur */
    color: white;
    font-size: 20px;
    font-weight: bold;
    padding: 20px;
    margin: 50px auto;
    width: 60%;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
}

    </style>
</head>
<body>

<div class="success-message">
        Création Faite
    </div>
    <?php 
    //header location avec 3 second
    header("refresh:3;url=creation_bijoux_operateur.php");
 
    ?>
     
</body>
</html>