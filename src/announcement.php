<?php
include "components/navbar.php";
include "functions/adminFunctions.php";


?>

<!DOCTYPE html>
<html lang="en" class="bg-[#F1FAEE]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Announcements</title>
</head>
<body class="min-h-screen bg-[#F8F8FF]">
    <div class="overflow-x-auto max-w-4xl mx-auto p-3">
        <table class="table bg-white shadow-lg">
            <thead>
                <tr>
                    <th>Announcements</th>
                    <th class="text-center">Descriptie</th>
                    <th class="text-center">Aangemaakt Announcement</th>
                </tr>
            </thead>
            <tbody>
                <?php

               if(!checkIfAdmin($mysqli, $_SESSION["login"])){
                echo'
         
                <button class="btn  hover:bg-[#000048] text-center" onclick="my_modal_1.showModal()">Voeg announcement Toe</button>
                <dialog id="my_modal_1" class="modal">
                    <div class="modal-box">
                        <h3 class="font-bold text-lg">Geef hier je announcement hier</h3>
                        <form class="form-control" method="post" action="announcement.php">
                        <textarea class="textarea textarea-bordered h-18  text-black bg-white" name="titel" placeholder="Geef announcement Titel toe"></textarea>
                        <br><br>
                           <textarea class="textarea textarea-bordered h-24  text-black bg-white" name="announcement" placeholder="Geef announcement Toe"></textarea>
                                <div class="modal-action">
                                    <form method="post">
                                        <input type="submit" value="submit" name="toevoegen"  class="btn btn-ghost text-black hover:text-white hover:bg-black">  
                                        <button class="btn">Cancel</button>';
                                        if (isset($_POST["toevoegen"])) {
                                            $Titel = $_POST["titel"];
                                           $Announcement = $_POST["announcement"];
                                           $gemaakteTijdstip = date("Y-m-d");
                       
                                           if(addAnnouncement($mysqli, $Titel, $Announcement, $gemaakteTijdstip )) {
                                               header('location: announcement.php');
                                           }
                                       }
                                   ;
                       
                                   '</form>
                                </div>
                           </div>
                    </div>
               </dialog>
               </div>
               </div>';
                                    }
                    foreach(getAnnouncements($mysqli) as $row) {
                        echo "
                        <tr>
                            <td>
                                <div class='flex items-center space-x-3'>
                                   <div class='font-bold'>".$row['AnnouncementTitle']."</div>
                                </div>
                            </td>
                            <td class='text-center'>";
                            
                            echo $row['AnnouncementText'];
                            
                            echo "</td>
                            <td class='text-center'>".$row['StartTime']."</td>
                            <td>";
                            if(!checkIfAdmin($mysqli, $_SESSION["login"])){
                             echo "<a href='announcementVerwijderen.php?announcement=".$row['Announcementid']."'><button class='btn btn-sm btn-circle btn-ghost'>✕</button>";
                            };
                            "</td>
                        </tr>
                        ";
                    }
                    
                     
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>