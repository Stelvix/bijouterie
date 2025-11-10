<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accès interdit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Style global de la page */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8d7da; /* Fond rose clair pour l'erreur */
            color: #721c24; /* Texte rouge pour l'erreur */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Remplir toute la hauteur de la page */
            margin: 0;
        }

        /* Conteneur central */
        .error-container {
            background-color: #ffffff; /* Fond blanc pour le message */
            padding: 40px;
            border-radius: 10px;
            border: 1px solid #f5c6cb; /* Bordure rose clair */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }

        /* Titre de l'erreur */
        h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        /* Message d'erreur */
        p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        /* Lien de retour à la page de connexion */
        a {
            text-decoration: none;
            color: #007bff;
            font-size: 1.2em;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="error-container">
        <h1>Accès interdit</h1>
        <p>Vous n'avez pas l'autorisation d'accéder à cette page.</p>
        <p>Si vous pensez que cela est une erreur, contactez un administrateur.</p>
        <p><a href="login_form.php">Retour à la page de connexion</a></p>
    </div>

</body>
</html>
