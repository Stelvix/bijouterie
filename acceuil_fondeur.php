<?php
include_once("dashboard_fondeur.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Fondeur</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        a{
            text-decoration: none;
            color: #000;

        }
    </style>
</head>
<body>
 

    <?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== "Fondeur") {
    header("Location: login.php");
    exit;
}
?>
<h1>Bienvenue, <?php echo $_SESSION['nom']; ?> !</h1>

    <a href="missions.php"><i class="fa-solid fa-bullseye"></i> Cliquez ici pour voir vos missions!</a>

</body>
</html>