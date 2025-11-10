 <?php
$conn = require "connection.php";
      // recuperer les infos du formulaire
    $type_materiaux = trim($_POST['type_materiaux']);
    $description = trim($_POST['description']);
    $image = $_FILES['images'];
    $statut = $_POST['statut'];
 
    //on récupere l'extension original du fichier image.
    $extension = pathinfo($image['name'], PATHINFO_EXTENSION);
    // on creé un nom de un fichier unique
    $nom_fichier = "photos_reparation/" .uniqid() . ".$extension";

    // verifier si les champs ne sont pas vide avant l'insertion dans la bdd
    if (!empty($type_materiaux) && !empty($description) && !empty($image['name']) && !empty($statut)) {
        // Préparer la requête SQL
    $sql = "INSERT INTO tasks (type_materiaux, description, images, statut) 
            VALUES (:type_materiaux, :description, :images, :statut)";

    $stmt = $conn->prepare($sql);

        //utiliser bindparm pour lier les variables(qui contiennt les infos du formulaire) au colonnes dans la bdd
        $stmt->bindParam(':type_materiaux', $type_materiaux);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':images', $nom_fichier);
        //$stmt->bindParam(':prix_estime', $prix_estime);
        //$stmt->bindParam(':prix_final', $prix_final);
        $stmt->bindParam(':statut', $statut);
        //$stmt->bindParam(':id_metiers', $id_metiers);


         if ($stmt->execute()) {
            // header
            header('Location: travail_fait.php');
            
             // upload de l'image
            move_uploaded_file($image['tmp_name'], $nom_fichier);
        }else {
        echo "Veuillez remplir tous les champs.";
    }} else {
        echo "erreur";
    }
 ?>
 