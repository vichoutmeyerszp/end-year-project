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
    $resultaat = $connection->query("SELECT tblannouncements.Announcementid, tblannouncements.AnnouncementText, tblannouncements.EndTime, tblannouncements.hostid, tblgebruikers.voornaam, tblgebruikers.naam 
    FROM tblannouncements
    INNER JOIN tblgebruikers ON (tblgebruikers.gebruikerid = tblannouncements.Announcementid)");
    return $resultaat;
}

?>