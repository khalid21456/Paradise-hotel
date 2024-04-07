<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulaire de résevation en ligne</title>
	<link rel="stylesheet" href="../css/log.css" />
	<link rel="stylesheet" href="../css/all.min.css" />
	<link rel="shortcut icon" type="image/png" href="../img/icon-paradise.png">
	<link href="https://fonts.googleapis.com/css2?family=Vollkorn+SC&display=swap" rel="stylesheet">
</head>

<body>
	<div class="container">
		<form action="book.php" method="POST">
			<div class="title">
				<h1 style="font-family:'Vollkorn SC', serif;">Résérvation du chambre</h1>
			</div>
			<div class="user">
				<div class="input">
					<label for="CIN" style="font-family:'Vollkorn SC', serif;">CIN</label>
					<input type="text" name="cin" required placeholder="entrez le cin" />
				</div>

				<div class="input">
					<label for="NOM" style="font-family:'Vollkorn SC', serif;">NOM</label>
					<input type="text" name="nom" required placeholder="entrez le nom " />
				</div>

				<div class="input">
					<label for="PRENOM" style="font-family:'Vollkorn SC', serif;">PRENOM</label>
					<input type="text" name="prenom" required placeholder="entrez le prenom" />
				</div>

				<div class="input">
					<label for="ADRESSE" style="font-family:'Vollkorn SC', serif;">ADRESSE</label>
					<input type="text" name="adresse" required placeholder="entrez l'adresse " />
				</div>

				<div class="input">
					<label for="EMAIL" style="font-family:'Vollkorn SC', serif;">EMAIL</label>
					<input type="text" name="email" required placeholder="entrez l'email" />
				</div>

				<div class="input">
					<label for="TELEPHONE" style="font-family:'Vollkorn SC', serif;">N° TELEPHONE :</label>
					<input type="text" name="tele" required placeholder="entrez le numero de tele" />
				</div>
				<div class="ltht">
					<div class="selection">
						<label for="CAT" style="font-family:'Vollkorn SC', serif;">CATEGORIE DE CHAMBRE : </label>
						<select name="cat">
							<option value="none"></option>
							<option value="Confort">Confort</option>
							<option value="Delux">Deluxe</option>
							<option value="Economique">Economique</option>
							<option value="Familiale">Familiale</option>
						</select>
					</div>
					<div class="inputdate">
						<label for="dd" style="font-family:'Vollkorn SC', serif;">DATE DE DEBUT</label>
						<input name="checkIn" type="date" />
					</div>
					<div class="inputdate">
						<label for="df" style="font-family:'Vollkorn SC', serif;">DATE DE FIN</label>
						<input name="checkOut" type="date" />
					</div>
				</div>
			</div>
			<div class="butt">
				<button style="font-family:'Vollkorn SC', serif;" type="submit" style="cursor:pointer;" name="sub"
					class="button">CONFIRMER MA
					RESERVATION</button>
			</div>
		</form>
	</div>
	<script src="../js/controles.js"></script>
</body>

<?php

error_reporting(0);
if (isset($_POST["sub"])) {
	$cin = $_POST['cin'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$adresse = $_POST['adresse'];
	$email = $_POST['email'];
	$tele = $_POST['tele'];
	$categorie = $_POST['cat'];
	$date_deb = $_POST['checkIn'];
	$date_fin = $_POST['checkOut'];
	include("controles.php");
	if ($bool) {
		include("../database/connexion.php");
		$date = date("Y-m-d");
		if ($date > $date_deb) {
			echo "<script>";
			echo "La date est ancienne";
			echo "</script>";
		}
		if ($date_fin <= $date_deb) {
			echo "<script>";
			echo "La date est ancienne";
			echo "</script>";
		}
		$req_verify = "SELECT * FROM Client WHERE cinClient = '$cin'";
		$result = mysqli_query($connexion, $req_verify);

		if (mysqli_fetch_row($result) == null) {
			$req_insert_client = "INSERT INTO Client VALUES('$cin','$nom','$prenom','$adresse','$email','$tele')";
			mysqli_query($connexion, $req_insert_client);
		}
		$req1 = "SELECT * FROM chambre WHERE Categorie='$categorie'
    			AND idChambre NOT IN (SELECT idChambre FROM reservation)";
		$select1 = mysqli_query($connexion, $req1);
		$num = mysqli_num_rows($select1);
		echo "<script>console.log($num)</script>";
		if ($num == 0) {
			$search_reservation = "SELECT reservation.idChambre , reservation.date_debut , reservation.date_fin ,
							   chambre.Categorie FROM reservation INNER JOIN chambre ON
							   reservation.idChambre = chambre.idChambre WHERE Categorie = '$categorie' AND 
							   NOT($date_deb<date_fin AND $date_deb>date_debut) AND 
							   NOT($date_fin<date_fin AND $date_fin>date_debut)";
			$resultat = mysqli_query($connexion, $search_reservation);
			$ligne = mysqli_fetch_array($resultat);
			if (mysqli_num_rows($resultat) == 0) {
				echo "<script>alert('la chambre est introuvable, essayez-vous une autre catégorie')</script>";
			} else {
				$req = "INSERT INTO reservation(cinClient, idChambre, date_debut, date_fin) 
					VALUES('$cin'," . $ligne["Num_chambre"] . ",'$date_deb','$date_fin')";
				mysqli_query($connexion, $req);
				echo "<script>window.open('success.php');</script>";
			}
		} else {
			$rooms = mysqli_fetch_row($select1);
			$chambre_valable = $rooms[0];
			$req2 = "INSERT INTO reservation (cinClient, idChambre, date_debut, date_fin)
                		VALUES ('$cin',$chambre_valable, '$date_deb' , '$date_fin')";
			mysqli_query($connexion, $req2);
			echo "<script>window.open('success.php');</script>";
		}
		include("../database/deconnexion.php");
	}
}

?>

</html>