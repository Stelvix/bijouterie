<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Inscription</h2>
        <form action="signup.php" method="post">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" name="nom" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom :</label>
                <input type="text" name="prenom" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="mot_pass" class="form-label">Mot de passe :</label>
                <input type="password" name="mot_pass" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Rôle :</label>
                <select name="role" class="form-control" required>
                    <option value="Chef">Chef d'atelier</option>
                    <option value="Fondeur">Fondeur</option>
                    <option value="Sertisseur">Sertisseur</option>
                    <option value="Polisseur">Polisseur</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
        <br>
        <a href="login_form.php">Déjà inscrit ? Connectez-vous ici</a>
    </div>
</body>
</html>
