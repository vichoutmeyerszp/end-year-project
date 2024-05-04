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

function getGoals($connection) {
    $resultaat = $connection->query("SELECT *
    FROM tblgoals ORDER BY tblgoals.Goalid DESC");
    return $resultaat;
}

function addGoal($connection, $GoalTitle, $Descriptie, $Prijs, $StartTime) {
    $resultaat = $connection->query("INSERT INTO tblgoals (GoalTitle, Descriptie, Prijs, StartTime) VALUES ('".$GoalTitle."','".$Descriptie."','".$Prijs."','".$StartTime."')");
    return $resultaat;
}

    
function checkIfAdmin($connection,$email){
        $resultaat = $connection->query("SELECT * FROM tblgebruikers where email = '".$email."' AND admin=1");
        return ($resultaat->num_rows == 0)?false:$resultaat->fetch_all(MYSQLI_ASSOC);
}

function getUsers($connection) {
    $resultaat = $connection->query("SELECT * FROM tblgebruikers");
    return $resultaat;
}

function deleteUser($connection, $gebruikerid) {
    $resultaat = $connection->query("DELETE FROM tblgebruikers where gebruikerid = '". $gebruikerid."'");
    return $resultaat;
}

function getReview($connection, $spel) {
    $resultaat = $connection->query("SELECT * FROM tblfeedback INNER JOIN tblgebruikers ON tblfeedback.feedback_gever = tblgebruikers.gebruikerid where spel = '".$spel."'");
    return ($resultaat->num_rows == 0)?false:$resultaat->fetch_all(MYSQLI_ASSOC);
}

function showReviewer($connection, $gebruikerid) {
    $resultaat = $connection->query("SELECT * FROM tblfeedback INNER JOIN tblgebruikers ON tblfeedback.gebruiker2 = tblgebruikers.gebruikerid WHERE gebruiker1 = $gebruikerid");
    return $resultaat;
}

?>