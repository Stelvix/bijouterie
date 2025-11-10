 <?php
  include_once("dashboard_chef.php");
  //inclure la page de connection a la bdd
  $conn = include_once("connection.php");

  if ($conn) {
    //echo "connection établis";
  } else {
    echo "Erreur de connection";
  }

  // mettre sur cette page les historique de chaque opérateurs en fonction de l'id
  // Recuperer ls donnés de la bdd
  // Requête SQL pour récupérer les bijoux
  $req = "SELECT * FROM bijoux";
  $stmt = $pdo->prepare($req); 
  $stmt->execute();
  // Récupération de tous les résultats  
  $resultat = $stmt->fetchAll();   
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Historique des tâches</title>
  <style>
    table {
      width: 100%; /* Taille ajustée */
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: center;
    }
    th {
      background-color: #f4f4f4;
    }
  </style>
</head>
<body>
  <h1 style="text-align: center;"><i class="fa fa-history" aria-hidden="true"></i>Historique des créations</h1>
  <div class="historique">
    <table>
      <thead>
        <tr>
           <th>Type de Bijou</th>
          <th>Description</th>
          <th>État</th>
          <th>Rôle</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($resultat as $row) { ?>
        <tr>
           <td><?php echo htmlspecialchars($row['type_bijoux']); ?></td>
          <td><?php echo htmlspecialchars($row['description']); ?></td>
          <td><?php echo htmlspecialchars($row['etat']); ?></td>
          <td>
  <?php 
    if ($row['id_metiers'] == 1) {
      echo "Fondeur";
    } elseif ($row['id_metiers'] == 2) {
      echo "Sertisseur";
    } elseif ($row['id_metiers'] == 3) {
      echo "Polisseur";
    } else {
      echo "Inconnu";  
    }
  ?>
</td>

        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

<h1 style="text-align: center; margin-top:3%"><i class="fa fa-history" aria-hidden="true"></i>Historique des taches</h1>

  <?php
$reqs = "SELECT * FROM tasks";
  $stmt = $pdo->prepare($reqs); 
  $stmt->execute();
  // Récupération de tous les résultats  
  $resultats = $stmt->fetchAll();  
  ?> 
  <div class="historique">
    <table>
      <thead>
        <tr>
           <th>Type de Bijou</th>
          <th>Description</th>
          <th>État</th>
          <th>Rôle</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($resultats as $rows) { ?>
        <tr>
           <td><?php echo htmlspecialchars($rows['type_materiaux']); ?></td>
          <td><?php echo htmlspecialchars($rows['description']); ?></td>
          <td><?php echo htmlspecialchars($rows['statut']); ?></td>
          <td>
  <?php 
    if ($row['id_metiers'] == 1) {
      echo "Fondeur";
    } elseif ($row['id_metiers'] == 2) {
      echo "Sertisseur";
    } elseif ($row['id_metiers'] == 3) {
      echo "Polisseur";
    } else {
      echo "Inconnu";  
    }
  ?>
</td>

        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

</body>
</html>
 