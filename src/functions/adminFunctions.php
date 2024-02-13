<?php 
function getTimeDifference($endTime) {
    $currentDate = date("Y-m-d H:i:s");
    $endDate = strtotime($endTime);
    $currentDate = strtotime($currentDate);
    $timeDifference = $endDate - $currentDate;
    $timeDifference = date("H:i:s", $timeDifference);
    return $timeDifference;
}

function getAnnouncements($connection) {
    $resultaat = $connection->query("SELECT *
    FROM tblannouncements ORDER BY tblannouncements.Announcementid DESC");
    return $resultaat;
}

function addAnnouncement($connection, $AnnouncementTitle, $AnnouncementText, $StartTime) {
        $resultaat = $connection->query("INSERT INTO tblannouncements (AnnouncementTitle, AnnouncementText, StartTime) VALUES ('".$AnnouncementTitle."','".$AnnouncementText."','".$StartTime."')");
        return $resultaat;
}
    
function checkIfAdmin($connection,$email){
        $resultaat = $connection->query("SELECT * FROM tblgebruikers where email = '".$email."' and admin=1");
        return ($resultaat->num_rows == 0)?false:$resultaat->fetch_all(MYSQLI_ASSOC);
}

function getUsers($connection) {
    $resultaat = $connection->query("SELECT * FROM tblgebruikers");
    return $resultaat;
}

function addFriend($connection, $gebruikerid, $vriendid, $voornaam, $naam){
    $resultaat = $connection->query("INSERT INTO tblgebruikers (email, voornaam, naam, wachtwoord, profielfoto, beschrijving) VALUES ('".$gebruikerid."','".$vriendid."','".$voornaam."','".$naam."')");
    return $resultaat;
}

function showFriend($connection) {
    $resultaat = $connection->query("SELECT * FROM tblgebruikers WHERE gebruiker1 = '".$_SESSION['login']."' OR gebruiker2 = '".$_SESSION['login']."'");
    return $resultaat;
}


    

?>