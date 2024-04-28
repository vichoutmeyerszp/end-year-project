<?php

include "../../connect.php";

session_start();

$outgoing_id = mysqli_real_escape_string($mysqli, $_POST['outgoing_id']);
$incoming_id = mysqli_real_escape_string($mysqli, $_POST['incoming_id']);
$output = "";

$sql = "SELECT * FROM gesprekken, tblgebruikers
        WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id}) 
        OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id})";
$query = mysqli_query($mysqli, $sql);
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        if ($row['outgoing_msg_id'] === $outgoing_id) {
            $output .= '<div class="chat outgoing">
                            <div class="details">
                                <p>' . $row['bericht'] . '</p>
                            </div>
                        </div>';
        } else {
            $output .= '<div class="chat incoming">
                            <img src="/public/images/' . $row['profilefoto'] . '">
                            <div class="details">
                                <p>' . $row['bericht'] . '</p>
                            </div>
                        </div>';
        }
    }
    echo $output;
}




?>