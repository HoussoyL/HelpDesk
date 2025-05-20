
<!DOCTYPE html>
<html lang="en">
<head>
<title>HelpDesk</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
</head>
<body>


<?php

    include 'connection.php';
    $conn = OpenCon();
    if ($conn instanceof mysqli) {
        echo "Connected Réussie   ", "<br>";
    } else {
        echo "Unexpected connection type.";
    }

    $sql = "SELECT id,date,heure, nom,statut,titre FROM utilisateur";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            if ($row["statut"] == "Ouvert") {
                echo "<br>", "id=", $row["id"], "  ", $row["date"], "  ", $row["heure"], "  Nom ", $row["nom"], '<font color="red"   font> ', " statut : ", $row["statut"], '<font color="black"  titre:  font> ', $row["titre"];
            } elseif ($row["statut"] == "en cours") {
                echo "<br>", "id=", $row["id"], "  ", $row["date"], "  ", $row["heure"], "  Nom ", $row["nom"], '<font color="blue"  font> ', " statut : ", $row["statut"], '<font color="black"  titre:  font> ', $row["titre"];

            } else {
                echo "<br>", "id=", $row["id"], "  ", $row["date"], "  ", $row["heure"], "  Nom ", $row["nom"], '<font color="green" font> ', " statut : ", $row["statut"], '<font color="black"  titre:  font> ', $row["titre"];
            }
        }
    } else {
        echo "0 results";
    }
    echo "<br>", "<br>", "Quel ticket voulez vous consulter ?(numero d'id)";
?>

<form action="afficher.php" method="POST">

		<label for="choix"> choix : </label><input type="int" name="choix" id="choix" placeholder="Choisissez un ID" /><br/><br/>

		<input type="submit" name="btOK" value="Envoyer">

	</form>

<?php
    // afficher toute les colonnes de cet incident et passer le statut a "en cours" //

    CloseCon($conn);

?>
