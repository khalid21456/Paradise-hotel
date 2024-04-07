<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/admin.css" />
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn+SC&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../img/icon-paradise.png">
</head>

<body>
    <?php include("../database/connexion.php");?>
    <script type="text/javascript">
        function deleteRow(button,id) {
            button.parentElement.parentElement.parentElement.remove();
        }
    </script>
    <header style="cursor:default;">
        <h1>Paradise.admin<h1>
    </header>

    <main>
        <div class="container">
            <table class="table table-dark table-hover">
                <tr class="table-warning">
                    <th>ID</th>
                    <th>Cin</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Date debut</th>
                    <th>Date fin</th>
                    <th>Chambre</th>
                    <th></th>
                </tr>

                <?php

                $req = "SELECT idRes,client.cinClient,Nom,Prenom,date_debut,date_fin,chambre.idChambre 
                        FROM client INNER JOIN 
                        reservation ON client.cinClient = reservation.cinClient INNER JOIN
                        chambre ON reservation.idChambre = chambre.idChambre";

                $result = mysqli_query($connexion, $req);
                $nb = mysqli_num_fields($result);
                while ($line = mysqli_fetch_row($result)) {
                    echo "<tr>";
                    for ($i = 0; $i < $nb; $i++) {
                        echo "<td>" . $line[$i] . "</td>";
                    }
                    echo "<td>";
                    echo "<form method='POST' action='admin.php'>";
                    echo "<input class='btn btn-danger' onclick='deleteRow(this,$line[0])' name=" . $line[0] . "
                          type='submit' value='Supprimer'>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </main>
    <?php include("../database/deconnexion.php");?>
</body>
</html>