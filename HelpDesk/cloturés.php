<?php
include 'connection.php';
$conn = OpenCon();
if ($conn instanceof mysqli) {
    echo "Connected Réussie   ", "<br>";
} else {
    echo "Unexpected connection type.";
}

$sql = "SELECT id, nom, mail FROM utilisateur WHERE statut='Cloturé'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<br>", "id: ", $row["id"], " - Nom: ", $row["nom"], "mail= ", $row["mail"], "<br>";
    }
} else {
    echo "0 results", "<br>";
}
CloseCon($conn);
