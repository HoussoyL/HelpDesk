    <?php
    include 'connection.php';
    $conn = OpenCon();
    if ($conn instanceof mysqli) {
    echo "Connected Réussie   ";
    } else {
    echo "Unexpected connection type.";
    }
    $sql = "INSERT INTO `utilisateur` (`nom`,  `mail`) VALUES ('$nom', '$mail')";
if (mysqli_query($conn, $sql)) {
      echo "Nouveau enregistrement créé avec succès";
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}

    CloseCon($conn);
    ?>