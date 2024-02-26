<?php
include "connect.php";
include "functions/adminFunctions.php";

    if (deleteUser($mysqli, $_GET["gebruiker"]) && (deleteFriends($mysqli, $_GET["gebruiker"]))) {
       header("location: spelers.php");
    } else {
        echo "Gebruiker niet kunnen verwijderen: " . $mysqli->error;
    }
    $mysqli->close();

?>