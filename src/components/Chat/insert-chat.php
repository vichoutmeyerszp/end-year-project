<?php

require_once "../../connect.php";

session_start();

$outgoing_id = mysqli_real_escape_string($mysqli, $_POST['outgoing_id']);
$incoming_id = mysqli_real_escape_string($mysqli, $_POST['incoming_id']);
$bericht = mysqli_real_escape_string($mysqli, $_POST['message']);


var_dump($outgoing_id);
var_dump($incoming_id);
var_dump($bericht);


if (!empty($bericht)) {
    $stmt = $mysqli->prepare("INSERT INTO gesprekken (bericht, incoming_message_id, outgoing_message_id) VALUES (?, ?, ?)");
    $stmt->bind_param("sii", $bericht, $incoming_id, $outgoing_id);

    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
    }
    echo "Message sent";
} else {
    echo "\$bericht is empty";
}

?>