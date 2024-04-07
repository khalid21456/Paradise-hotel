<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>reservation se faite par succès !</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <style>
    body {
      background-image:url('../img/reserve_image.jpg');
    }
  </style>
</head>
<?php 
    include("../database/connexion.php");
    // étage , numero de chambre , date d'entrée
    $grant = "SELECT * FROM reservation ORDER BY idRes DESC LIMIT 1";
    $duree_req = "SELECT DATEDIFF(date_fin,date_debut) FROM reservation ORDER BY idRes DESC LIMIT 1";
    $result = mysqli_query($connexion,$grant);
    $reservation = mysqli_fetch_array($result);
    $numero_chambre = $reservation["idChambre"];
    $etage = $numero_chambre/100;
    settype($etage,"int");
    $date_entree = $reservation["date_debut"];
    $cin = $reservation["cinClient"];

    // Nom et prenom de client
    $grant = "SELECT Nom,Prenom FROM Client WHERE cinClient = '$cin' ";
    $result = mysqli_query($connexion,$grant);
    $line = mysqli_fetch_array($result);
    $nom = $line["Nom"];
    $prenom = $line["Prenom"];

    // Nbre de jour
    $result = mysqli_query($connexion,$duree_req);
    $duree = mysqli_fetch_row($result)[0];

    // type de chambre, prix, prix Total
    $grant = "SELECT * FROM chambre WHERE idChambre = $numero_chambre";
    $result = mysqli_query($connexion,$grant);
    $reservation = mysqli_fetch_array($result);
    $categorie = $reservation["Categorie"]; 
    $prix = $reservation["prix"];
    $prix_Total = $prix*$duree;

?>
<body>
  <div class="container" style="margin-top:15%;">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Bienvenue Monsieur <?php echo strtoupper($nom)." ".strtoupper($prenom)?></h4>
      <p>
        Votre reservation se faite par succès, Votre chambre résevée a le numéro <?php echo $numero_chambre ?> dans
        l'étage <?php echo $etage?> .
      </p>

      <hr />
      <p class="mb-0">
        Catégorie de la chambre : <b><?php echo $categorie ?></b> <br>
        prix de la chambre : <b><?php echo $prix." MAD" ?></b> <br>
        Date entrer : <b><?php echo $date_entree?></b> <br>
        Nombre de jour : <b><?php echo $duree." jours"?></b> <br>
        Prix Total :  <b><?php echo $prix_Total." MAD"?></b><br>
      </p>
    </div>
  </div>

</body>
<?php include("../database/deconnexion.php")?>
</html>