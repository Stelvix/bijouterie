<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard pour le chef de l'atelier</title>
    <link rel="stylesheet" href="style_dash.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body id="body">

    <!-- Include header and aside -->
    <?php include('header.php'); ?>
    <?php include('aside.php'); ?>

    <!-- Partie section pour afficher du contenu spécifique -->
    <section id="section">
        <!-- Contenu spécifique de chaque page ici -->
        <?php
    // Utilisation de include ou require pour afficher le contenu spécifique de chaque page
    if (basename($_SERVER['PHP_SELF']) == 'acceuil.php') {
        include('acceuil.php');
    } elseif (basename($_SERVER['PHP_SELF']) == 'gestion_taches.php') {
        include('gestion_taches.php');
    } elseif (basename($_SERVER['PHP_SELF']) == 'verification_travail.php') {
        include('verification_travail.php');
    }  elseif (basename($_SERVER['PHP_SELF']) == 'creation_bijoux.php') {
        include('creation_bijoux.php');
    } elseif (basename($_SERVER['PHP_SELF']) == 'reparation_bijoux.php') {
        include('reparation_bijoux.php');
    } elseif (basename($_SERVER['PHP_SELF']) == 'historique.php') {
        include('historique.php');
    } elseif (basename($_SERVER['PHP_SELF']) == 'logout.php') {
        include('logout.php');
    }
     ?>
    </section>

  
</body>

</html>