<?php
include "connect.php";
include "functions/userFunctions.php";
session_start();

    if (deleteFriend($mysqli, $_SESSION["login"], $_GET["vriend"]) && deleteFriend($mysqli, $_GET["vriend"], $_SESSION["login"])) {
       header("location: vrienden.php");
    } else {
        echo "Gebruiker niet kunnen verwijderen: " . $mysqli->error;
    }
    $mysqli->close();

?>