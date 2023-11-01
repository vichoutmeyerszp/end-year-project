<?php 
function getTimeDifference($endTime) {
    $currentDate = date("Y-m-d H:i:s");
    $endDate = strtotime($endTime);
    $currentDate = strtotime($currentDate);
    $timeDifference = $endDate - $currentDate;
    $timeDifference = date("H:i:s", $timeDifference);
    return $timeDifference;
}

function getAnnouncements($connection,) {
    $resultaat = $connection->query("SELECT tblannouncements.Announcementid, tblannouncements.AnnouncementText, tblannouncements.StartTime 
    FROM tblannouncements ORDER BY tblannouncements.Announcementid DESC");
    return $resultaat;
}

function addAnnouncement($connection, $AnnouncementText, $StartTime) {
        $resultaat = $connection->query("INSERT INTO tblannouncements (AnnouncementText, StartTime) VALUES ('".$AnnouncementText."','".$StartTime."')");
        return $resultaat;
    }
    function checkIfAdmin($connection,$email){
        $resultaat = $connection->query("SELECT * FROM tblgebruikers where email = '".$email."' and admin=1");
        return ($resultaat->num_rows == 0)?false:$resultaat->fetch_all(MYSQLI_ASSOC);
    }

?>