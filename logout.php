<?php
session_start();
session_destroy();

// Stocker un message en session pour l'afficher après la redirection
// Redémarrer la session pour stocker le message
session_start(); 
$_SESSION['message'] = "Déconnecté avec succès.";

header('Location: login_form.php');
exit;
?>
