<?php
include "connect.php";
include "./functions/maintenanceFunctions.php";

if (isset($_GET["enableColor"])) {
    maintenanceColors($mysqli);
    header('location: index.php');

}
if (isset($_GET["disableColor"])) {
    unmaintenanceColors($mysqli);
    header('location: index.php');

}

if (isset($_GET["enableSpaceInvaders"])) {
    maintenanceSpaceInvaders($mysqli);
    header('location: index.php');

}
if (isset($_GET["disableSpaceInvaders"])) {
    unmaintenanceSpaceInvaders($mysqli);
    header('location: index.php');

}


if (isset($_GET["enableTetris"])) {
    maintenanceTetris($mysqli);
    header('location: index.php');

}
if (isset($_GET["disableTetris"])) {
    unmaintenanceTetris($mysqli);
    header('location: index.php');

}


if (isset($_GET["enableBSC"])) {
    maintenanceBSC($mysqli);
    header('location: index.php');

}
if (isset($_GET["disableBSC"])) {
    unmaintenanceBSC($mysqli);
    header('location: index.php');

}


if (isset($_GET["enableSnake"])) {
    maintenanceSnake($mysqli);
    header('location: index.php');

}
if (isset($_GET["disableSnake"])) {
    unmaintenanceSnake($mysqli);
    header('location: index.php');

}


?>