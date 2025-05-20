<?php
    $nom     = $_POST["nom"];
    $mail    = $_POST["mail"];
    $titre   = $_POST["titre"];
    $urgence = $_POST["urgence"];
    $os      = $_POST["os"];
    $version = $_POST["version"];
    $prob    = $_POST["textarea"];
    $statut  = "Ouvert";
    $dat     = date('d/m/y');
    $heure   = date('H:i');
    $incid   = time();
    $reponse = "";

    echo " Récapitulatif :", "<br>", "Vous ", $nom, " avez déposé une requete nommée ", $titre, "  (urgence ", $urgence, ").", "<br>", "Votre systeme d'exploitation est ", $os, " version ", $version, "<br>", "Votre probleme est le suivant :", $prob, "<br>", "Le statut est ", $statut, " depuis le ", $dat, " à ", $heure, "<br>", " Votre numéro d'incident est ", $incid, " et votre mail ", $mail, "<br>", "<br>";
    echo "<br>", " Votre demande sera traitée dans les plus bref délais .", "<br>", "<br>";

    include 'connection.php';
    $conn = OpenCon();
    if ($conn instanceof mysqli) {
        echo "Connected Réussie ", "<br>";
    } else {
        echo "Unexpected connection type.";
    }
    $sql = "INSERT INTO `utilisateur` (`nom`,`mail`,`titre`,`urgence`,`os`,`version`,`prob`,`incid`,`date`,`heure`,`statut`,`reponse`) VALUES ('$nom', '$mail','$titre','$urgence','$os','$version','$prob','$incid','$dat', '$heure', '$statut', '$reponse')";
    if (mysqli_query($conn, $sql)) {
        echo "Nouveau enregistrement créé avec succès", "<br>";
    } else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
    }

    CloseCon($conn);
    echo "<br>";
?>
<a href="accueil.php?click=1">retour a la page d'accueil </a>
