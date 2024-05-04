<?php
include "connect.php";
include "functions/userFunctions.php";
session_start();

    if (deleteRequest($mysqli, $_GET["verzoek"], $_SESSION["login"])) {
       header("location: verzoeken.php");
    } else {
        echo "Gebruiker niet kunnen verwijderen: " . $mysqli->error;
    }
    $mysqli->close();

?>