<?php
include_once("dashboard_chef.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
            margin-top: 10%;
            font-size: 25px;
            color: #100e0e;
        }
        .fa-dashboard{
            color: #000000;
        }
    </style>
</head>
<body>
 
    <?php
      include_once("connection.php");
    /*
      if ($conn) {
        echo "Erreur de connexion à la base de données";
        exit;
      }*/
    
      // Statistiques pour afficher sur la page
      $req_in_progress = "SELECT COUNT(*) FROM bijoux WHERE etat = 'réparé'";
      $stmt = $pdo->prepare($req_in_progress); 
      $stmt->execute();
      $in_progress = $stmt->fetchColumn();
    
      $req_completed = "SELECT COUNT(*) FROM bijoux WHERE etat = 'créé'";
      $stmt = $pdo->prepare($req_completed); 
      $stmt->execute();
      $completed = $stmt->fetchColumn();

        $req_completed = "SELECT COUNT(*) FROM tasks WHERE statut = 'travail fait'";
        $stmt = $pdo->prepare($req_completed);
        $stmt->execute();
        $complete = $stmt->fetchColumn();
    ?>
    
    <!DOCTYPE html>
    <html lang="fr">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard du Chef</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background: #f3f4f6;
            }
    
            .hero {
                background: #4caf50;
                color: white;
                text-align: center;
                padding: 50px 20px;
            }
    
            .hero h1 {
                margin: 0;
                font-size: 36px;
            }
    
            .hero p {
                font-size: 18px;
                margin-top: 10px;
            }
    
            .stats {
                display: flex;
                justify-content: center;
                gap: 30px;
                margin: 40px 0;
            }
    
            .stat-card {
                background: white;
                border-radius: 8px;
                padding: 30px;
                width: 200px;
                text-align: center;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }
    
            .stat-card h3 {
                font-size: 30px;
                margin: 0;
            }
    
            .stat-card p {
                font-size: 18px;
                color: #666;
            }
            .stat-card a {
                color: #4caf50;
                text-decoration: none;
            }
    
            
        </style>
    </head>
    
    <body>
    
        <!-- Hero Section -->
        <div class="hero">
            <h1>Bienvenue Chef !</h1>
            <p>Prêt à superviser l'atelier et à gérer les tâches du jour ?</p>
        </div>
    
        <!-- Stats Section -->
        <div class="stats">
            <div class="stat-card">
                <h3>
                    <?php echo $in_progress; ?>
                </h3>
                <p><a href="missions.php">Bijoux en cours de creation</a></p>
            </div>
            <div class="stat-card">
                <h3>
                    <?php echo $completed; ?>
                </h3>
                <p><a href="verification_travail.php">Bijoux terminées</a></p>
            </div>
        </div>
    
      
    
    </body>
    
    </html>

    
</body>
</html>

 