<?php

include "../../connect.php";

session_start();

$outgoing_id = mysqli_real_escape_string($mysqli, $_POST['outgoing_id']);
$incoming_id = mysqli_real_escape_string($mysqli, $_POST['incoming_id']);
$output = "";

$sql = "SELECT * FROM gesprekken
        WHERE (outgoing_message_id = $outgoing_id AND incoming_message_id = $incoming_id) 
        OR (outgoing_message_id = $incoming_id AND incoming_message_id = $outgoing_id)";
$query = $mysqli->query($sql);

if ($query && $query->num_rows > 0) {
    while ($row = $query->fetch_assoc()) {
        if ($row['outgoing_message_id'] === $outgoing_id) {
            $output .= '<div class="chat outgoing">
                            <div class="details">
                                <p>' . $row['bericht'] . '</p>
                            </div>
                        </div>';
        } else {
            $output .= '<div class="chat incoming">

                           <div class="details">
                                <p>' . $row['bericht'] . '</p>
                            </div>
                        </div>';
        }
    }
    echo $output;
}

?> <!--img src="/public/images/' . $row['profilefoto'] . '">