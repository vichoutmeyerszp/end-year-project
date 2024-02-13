<?php

function isEmailCorrect($connection,$email){
    $resultaat = $connection->query("SELECT * FROM tblgebruikers where email = '".$email."'");
    return ($resultaat->num_rows == 0) ? false : true;
}
function isPasswordCorrect($connection,$password,$email){
    $resultaat = $connection->query("SELECT * FROM tblgebruikers where email = '".$email."'");
    return (password_verify($password,$resultaat->fetch_assoc()['wachtwoord']))?true:false;
}

function registerUser($connection, $voornaam, $achternaam, $email, $wachtwoord, $profielfoto, $beschrijving) {
    if(empty($profielfoto)) {
        $profielfoto = "profile.png";
    }

    $wachtwoord = convertPasswordToHash($wachtwoord);

    $resultaat = $connection->query("INSERT INTO tblgebruikers (email, voornaam, naam, wachtwoord, profielfoto, beschrijving) VALUES ('".$email."','".$voornaam."','".$achternaam."','".$wachtwoord."','".$profielfoto."','".$beschrijving."')");
    return $resultaat;
}

function updateUser($connection, $gebruikerid, $voornaam, $achternaam, $wachtwoord, $profielfoto, $beschrijving) {
    if(empty($profielfoto)) {
        if(getProfilePicture($connection,$gebruikerid)){
            $profielfoto = getProfilePicture($connection,$gebruikerid);
        }else{
            print $connection->error;
        }
    }
    if(empty($wachtwoord)){
        $sql = "UPDATE tblgebruikers set voornaam = '" . $voornaam . "', naam = '" . $achternaam . "', profielfoto = '" . $profielfoto . "', beschrijving = '" . $beschrijving . "' where gebruikerid = '" . $gebruikerid . "'";
        return ($connection->query($sql));
    }else{
        $wachtwoord = convertPasswordToHash($wachtwoord);

        return ($connection->query("UPDATE tblgebruikers set voornaam = '" . $voornaam . "', naam = '" . $achternaam . "',
        wachtwoord = '" . $wachtwoord . "', profielfoto = '" . $profielfoto . "', beschrijving = '" . $beschrijving . "' Where gebruikerid = '" . $gebruikerid . "'"));
    }
}

function convertPasswordToHash($wachtwoord) {
    $hashedwachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);
    return $hashedwachtwoord;
}
function getUser($connection,$gebruikerid){
    $resultaat = $connection->query("SELECT * FROM tblgebruikers where gebruikerid= '".$gebruikerid."'");
    return ($resultaat->num_rows == 0)?false:$resultaat->fetch_all(MYSQLI_ASSOC);
}
function getProfilePicture($connection,$gebruikerid){
    $resultaat = $connection->query("SELECT * FROM tblgebruikers where gebruikerid= '".$gebruikerid."'");
    return ($resultaat->num_rows == 0)?false:$resultaat->fetch_assoc()['profielfoto'];
}

function getGebruikersid($connection,$email){
    $resultaat = $connection->query("SELECT * FROM tblgebruikers where email = '".$email."'");
    return ($resultaat->num_rows == 0)?false:$resultaat->fetch_assoc()['gebruikerid'];
}



?>
