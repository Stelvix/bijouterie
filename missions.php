<?php
include_once("dashboard_fondeur.php");
?>
 
<!-- Mettre des cartes hrml et ccs qui vont montrer le travail fait -->
<h2>Missiosn à faire</h2>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        .container{
            display: flex;
            flex-wrap: wrap;
              margin-top: 3%;
         }
        .cartes{
            width: 194px;
            height: 250px;
             background-color: #f2f2f2;
            margin: 10px;
            padding: 10px;
            border-radius: 10px; 
            box-shadow: 2px 4px 8px #9169048d;
        }
        .cartes:hover{
            transform: scale(1.05);
            transition: 0.2s;
        }
        .cartes img{
            width: 100%;
            height: 60%;
            object-fit: cover; 
            border-radius: 12px;  
        }
        .cartes-footer{
             justify-content: space-between;
            align-items: center;
        }
        .cartes-footer h4{
            font-size: 13px;
            color: #000000;
            margin-top: 5%;
            font-weight: bold;
        }
        .cartes-footer h5{
            font-size: 12px;
            color: #000000;
        }
         .cartes-footer h6{
            font-size: 12px;
            color: #ffffff;
            font-weight: bold;
            background: #B8860B;
            padding: 2px;
            width: 60px;
            border-radius: 5px;
            text-align: center;
            float: right;
         }
        .cartes-footer a{
            text-decoration: none;
            color: #ffffff;
        }
        .cartes a{
            text-decoration: none;
        }
        .foot{
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #B8860B;
            height: 10px;
            width: 100%;
            border-radius: 0 0 6px 6px;
         }
    </style>

</head>
<body>

<?php
    // Connexion à la base de données via PDO
    include_once("connection.php"); // Assure-toi que connection.php établit correctement la connexion à la base de données

    // Requête SQL pour récupérer les bijoux
    $req = "SELECT * FROM bijoux";
    $stmt = $pdo->prepare($req); // Utilisation de $pdo qui est la variable de la connexion PDO
    $stmt->execute();  // Exécution de la requête
    $resultat = $stmt->fetchAll();  // Récupération de tous les résultats
    ?>

    <div class="container">
        <!-- Boucle pour afficher chaque bijou dans une carte -->
        <?php foreach ($resultat as $row) { ?>
            <div class="cartes">
                <a href="creation_bijoux_operateur.php">
                     <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="image de bijoux">
                    <div class="cartes-footer">
                    <h4><?php echo htmlspecialchars($row['type_bijoux']); ?></h6>
                    <h5><?php echo htmlspecialchars($row['description']); ?></h5>
                   <!-- <a href=""><h6> <?php echo htmlspecialchars($row['prix_estime']); ?> <i class="fa-solid fa-euro-sign"></i></h6></a>-->
                   <!-- <h4>
                       <u> <?php echo htmlspecialchars($row['etat']); ?></u>
                    </h4>-->
                  <b><?php 
                    if($row['id_metiers'] == 1){
                        echo " pour le fondeur";
                    }else if($row['id_metiers'] == 2){
                        echo " pour le sertisseur";
                    }else if($row['id_metiers'] == 3){
                        echo "pour le polisseur";
                    }else{
                        echo "Métier inconnu";
                    }
                    ?></b>
                    </div> <br>
                    </a>
             </div>
            

        <?php } ?>
    </div>


<br>


    <?php
        // Connexion à la base de données via PDO
        include_once("connection.php"); // Assure-toi que connection.php établit correctement la connexion à la base de données
    
        // Requête SQL pour récupérer les bijoux
        $req = "SELECT * FROM tasks";
        $stmt = $pdo->prepare($req); // Utilisation de $pdo qui est la variable de la connexion PDO
        $stmt->execute();  // Exécution de la requête
        $resultat = $stmt->fetchAll();  // Récupération de tous les résultats
        ?>

    <div class="container">
        <!-- Boucle pour afficher chaque bijou dans une carte -->
        <?php foreach ($resultat as $row) { ?>
        <div class="cartes">
            <a href="creation_bijoux_operateur.php">
                <img src="<?php echo htmlspecialchars($row['images']); ?>" alt="image de bijoux">
                <div class="cartes-footer">
                    <h4>
                        <?php echo htmlspecialchars($row['type_materiaux']); ?>
                        </h6>
                        <h5>
                            <?php echo htmlspecialchars($row['description']); ?>
                        </h5>
                        <!-- <a href=""><h6> <?php echo htmlspecialchars($row['prix_estime']); ?> <i class="fa-solid fa-euro-sign"></i></h6></a>-->
                        <!-- <h4>
                           <u> <?php echo htmlspecialchars($row['etat']); ?></u>
                        </h4>-->
                        <b><?php echo htmlspecialchars($row['statut']); ?></b>
                </div> <br>
            </a>
        </div>
    
    
        <?php } ?>
    </div>
 
  



    
    

</div>

 </body>
</html>

