<?php
    $rep    = $_POST["textarea2"];
    $statut = $_POST["statut"];
    $choix  = $_POST["choix"];

    include 'connection.php';
    $conn = OpenCon();
    if ($conn instanceof mysqli) {
        echo "Connected Réussie ", "<br>";
    } else {
        echo "Unexpected connection type.";
    }
    $sql = "UPDATE `utilisateur` SET `reponse`='$rep',`statut`='$statut' WHERE `id`='$choix'";
    if (mysqli_query($conn, $sql)) {
        echo "Nouveau enregistrement créé avec succès", "<br>";
    } else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
    }

    CloseCon($conn);
    echo "<br>";
?>

<a href="accueil.php?click=1">retour a la page d'accueil </a>
