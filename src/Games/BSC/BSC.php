<?php
include "../../connect.php";
include "../../functions/maintenanceFunctions.php";

if(checkmaintenanceBSC($mysqli) == "1") {
    header('location: ../../index.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="BSC.css">
    <title>Rock Paper Scissors</title>
</head>

<body>
    <header>
        <a href="../../index.php"><h1>Hoofdpagina</h1></a>
    </header>
    <div id="results">
        <p id="result">
            Maak uw keuze. Je kunt zoveel gaan als je wilt.
        </p>
    </div>

    <div id="choose">
        <div id="rock" class="choices">
            <img src="fotos/steen.png" alt="steen">
        </div>
        <div id="paper" class="choices">
            <img src="fotos/papier.png" alt="papier">
        </div>
        <div id="scissors" class="choices">
            <img src="fotos/schaar.png" alt="schaar">
        </div><br>
        <div id="reset" class="morechoices">
            Reset
        </div>

    </a>

    <p id="action">Reset de tekst hier om te herbeginnen</p>


    <script src="BSC.js"></script>
</body>

</html>