<?php
session_start();

try {
    // Connexion à la base de données
    $host = "localhost";
    $database = "bijouterie";
    $user = "root";
    $password = "";
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifier si les champs sont remplis
    if (!isset($_POST['nom'], $_POST['prenom'], $_POST['mot_pass'], $_POST['role'])) {
        throw new Exception("Veuillez remplir tous les champs.");
    }

    // Sécuriser les entrées
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mot_pass = $_POST['mot_pass']; // Pas de htmlspecialchars sur le mot de passe
    $role = htmlspecialchars($_POST['role']);

    // Vérifier si l'utilisateur existe déjà
    $checkUser = $pdo->prepare("SELECT * FROM users WHERE nom = :nom AND prenom = :prenom");
    $checkUser->bindParam(':nom', $nom);
    $checkUser->bindParam(':prenom', $prenom);
    $checkUser->execute();

    if ($checkUser->rowCount() > 0) {
        throw new Exception("Un utilisateur avec ce nom et prénom existe déjà !");
    }

    // Hachage du mot de passe
    $hashedPassword = password_hash($mot_pass, PASSWORD_DEFAULT);

    // Insérer l'utilisateur dans la base de données
    $requete = $pdo->prepare("INSERT INTO users (nom, prenom, mot_pass, role) VALUES (:nom, :prenom, :mot_pass, :role)");
    $requete->bindParam(':nom', $nom);
    $requete->bindParam(':prenom', $prenom);
    $requete->bindParam(':mot_pass', $hashedPassword);
    $requete->bindParam(':role', $role);
    $requete->execute();

    echo "Inscription réussie ! <a href='login_form.php'>Connectez-vous ici</a>";

} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
