<?php
$conn = require "connection.php";

// Vérifier si tous les champs existent avant de les récupérer
$type_materiaux = isset($_POST['type_bijoux']) ? trim($_POST['type_bijoux']) : null;
$description = isset($_POST['description']) ? trim($_POST['description']) : null;
$prix_estime = isset($_POST['prix_estime']) ? trim($_POST['prix_estime']) : null;
$statut = trim($_POST['etat']); // Si non coché, statut par défaut

$image = $_FILES['image'];
$extension = pathinfo($image['name'], PATHINFO_EXTENSION);
$nom_fichier = "photos_creation/" . uniqid() . ".$extension";

// Vérifier si tous les champs sont remplis avant l’insertion
if (!empty($type_materiaux) && !empty($description) && !empty($image['name']) && !empty($prix_estime)) {
    // Vérifier l'extension de l'image (seulement jpg, png, jpeg)
 
    // Préparer la requête SQL pour insérer dans la table bijoux
    $sql = "INSERT INTO bijoux (type_bijoux, description, images, etat, prix_estime) 
            VALUES (:type_bijoux, :description, :images, :etat, :prix_estime)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':type_materiaux', $type_materiaux);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':images', $nom_fichier);
    $stmt->bindParam(':etat', $statut);
    $stmt->bindParam(':prix_estime', $prix_estime);

    // Exécuter la requête
    if ($stmt->execute()) {
        // Upload de l'image seulement si l'insertion a réussi
        move_uploaded_file($image['tmp_name'], $nom_fichier);
        header("Location: verification_travail.php");
        exit();
    } else {
        echo "Erreur lors de la vérification du bijou.";
    }
} else {
    echo "Veuillez remplir tous les champs.";
}
?>
