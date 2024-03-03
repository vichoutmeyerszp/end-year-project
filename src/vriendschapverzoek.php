<?php
include "connect.php";
include "functions/userFunctions.php";
session_start();

    if (addRequest($mysqli, $_SESSION["login"], $_GET["verzoek"])) {
       header("location: spelers.php");
    } else {
        echo "Verzoek niet kunnen accepteren: " . $mysqli->error;
    }
    $mysqli->close();

?>