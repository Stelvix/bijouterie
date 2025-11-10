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

    // Vérifier si les champs sont bien remplis
    if (!isset($_POST['nom'], $_POST['prenom'], $_POST['mot_pass'], $_POST['role'])) {
        throw new Exception("Veuillez remplir tous les champs.");
    }

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mot_pass = $_POST['mot_pass']; 
    $role = htmlspecialchars($_POST['role']);

    // Vérifier si l'utilisateur existe avec le bon rôle
    $requete = $pdo->prepare("SELECT * FROM users WHERE nom = :nom AND prenom = :prenom AND role = :role");
    $requete->bindParam(':nom', $nom);
    $requete->bindParam(':prenom', $prenom);
    $requete->bindParam(':role', $role);
    $requete->execute();

    $resultat = $requete->fetch(PDO::FETCH_ASSOC);

    if ($resultat) {
        // Vérification du mot de passe
        if (password_verify($mot_pass, $resultat['mot_pass'])) {
            // Connexion réussie
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['role'] = $role;

            // Redirection selon le rôle
            switch ($role) {
                case "Chef":
                    header("Location: acceuil.php");
                    break;
                case "Fondeur":
                    header("Location: acceuil_fondeur.php");
                    break;
                case "Sertisseur":
                    header("Location: dashboard_sertisseur.php");
                    break;
                case "Polisseur":
                    header("Location: dashboard_polisseur.php");
                    break;
                default:
                    throw new Exception("Rôle inconnu.");
            }
            exit;
        } else {
        header("Location: incorrect.php");
        }
    } else {
        //header location
        header("Location: error.php");
     }

} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
