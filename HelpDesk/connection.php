<?php
function OpenCon()
{
    echo 'Connexion ...', "<br>";
    $dbhost = "localhost";
    $dbuser = "eleve";
    $dbpass = "btsinfo";
    $dbname = "bddhelpdesk";
    $conn   = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
function CloseCon($conn)
{
    $conn->close();
    echo 'Connexion fermée';
}
