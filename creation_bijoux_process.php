 <?php
$conn = require "connection.php";
      // recuperer les infos du formulaire
    $type_bijoux = trim($_POST['type_bijoux']);
    $description = trim($_POST['description']);
    $image = $_FILES['image'];
    $prix_estime = trim($_POST['prix_estime']);
    $etat = $_POST['etat'];
    $id_metiers = trim($_POST['id_metiers']);

    //on récupere l'extension original du fichier image.
    $extension = pathinfo($image['name'], PATHINFO_EXTENSION);
    // on creé un nom de un fichier unique
    $nom_fichier = "photos_creation/" .uniqid() . ".$extension";

    // verifier si les champs ne sont pas vide avant l'insertion dans la bdd
    if (!empty($type_bijoux) && !empty($description) && !empty($image['name']) && !empty($prix_estime) && !empty($etat) && !empty($id_metiers)) {
        // Préparer la requête SQL
    $sql = "INSERT INTO bijoux (type_bijoux, description, image, prix_estime, etat, id_metiers) 
            VALUES (:type_bijoux, :description, :image, :prix_estime, :etat, :id_metiers)";

    $stmt = $conn->prepare($sql);

        //utiliser bindparm pour lier les variables(qui contiennt les infos du formulaire) au colonnes dans la bdd
        $stmt->bindParam(':type_bijoux', $type_bijoux);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $nom_fichier);
        $stmt->bindParam(':prix_estime', $prix_estime);
        $stmt->bindParam(':etat', $etat);
        $stmt->bindParam(':id_metiers', $id_metiers);


        // Executer la requete
        if ($stmt->execute()) {
           // Vérification de l'ID pour déterminer le métier
        if ($id_metiers == 1) {
            echo "La tâche a bien été assignée au Fondeur.";
        } elseif ($id_metiers == 2) {
            echo "La tâche a bien été assignée au Sertisseur.";
        } elseif ($id_metiers == 3) {
            echo "La tâche a bien été assignée au Polisseur.";
        } else {
            echo "Métier inconnu.";
        }
            // upload de l'image
            move_uploaded_file($image['tmp_name'], $nom_fichier);
        
        } else {
            echo "Erreur lors de la création du bijoux.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
 ?>
 