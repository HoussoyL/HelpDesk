<?php
    include 'connection.php';
    $conn = OpenCon();
    if ($conn instanceof mysqli) {
        echo "Connected Réussie   ", "<br>";
    } else {
        echo "Unexpected connection type.";
    }
    $choix = $_POST["choix"];

    $sql = "SELECT * FROM utilisateur WHERE id=$choix";

    $result = $conn->query($sql);
    $data   = mysqli_fetch_array($result);

    CloseCon($conn);

    // -------------------affichage des données ----------------------
    echo "<br>", "ID n° ", $data["id"];
    echo "<br>", "Le ", $data["date"], " à ", $data["heure"], " ", $data["nom"], " a déposé une requete numero ", $data["incid"], ".";
    echo "<br>", "Titre de sa requete :", $data["titre"];
    echo "<br>", "<br>", "Son probleme est le suivant :", "<br>";
    echo $data["prob"];
    echo "<br>", "<br>", "Vous pouvez lui repondre par mail a l adresse suivante :", $data["mail"], "<br>";
    $statut = "en cours";

    echo "<br>", "Le statut de sa requete est ", $statut;

?>

<form action="reponse.php" method="POST">


		<label for="textarea"> Voulez vous lui répondre ? (255 caracteres max) </label><br/><br/>
    		<textarea name="textarea2" cols="50" rows="10"> </textarea><br />
		<br/><br/>
        <label for="statut">Statut de la requete :</label>
		<input type="radio" name="statut" id="os" value="en cours" checked /> en cours
		<input type="radio" name="statut" value="Cloturé" /> Cloturé
        <input type="hidden" name="choix" value="<?php echo "" . $choix . "" ?>" />
		<!-- Bouton -->
        <br/>
		<input type="submit" name="btOK" value="Envoyer">

	</form>

<?php

    echo "<br>", "<br>";
    // --------------------fin --------------------------

?>
<?php
