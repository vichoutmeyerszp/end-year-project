<?php
include "components/navbar.php";


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Announcements</title>
</head>

<style>

      body {
        display: flex;
        align-items: center;
        flex-direction: column;
        padding: 0px;
        margin: 0px;
        height: 100vh;
        background: linear-gradient(
          0deg,
          rgb(97, 98, 99) 0%,
          rgba(0, 0, 0, 98) 100%
        );
      }

      
    </style>
<body class="min-h-screen">
    <div class="overflow-x-auto min-w-fit mx-auto p-3">
        <table class="table bg-white shadow-lg">
            <thead>
                <tr>
                    <th class="text-center">Announcements</th>
                    <th class="text-center">Descriptie</th>
                    <th class="text-center">Aangemaakt Announcement</th>
                </tr>
            </thead>
            <tbody>
                <?php

               if(isset($_SESSION["admin"])){
                echo'
         
                <a href="announcementToevoegen.php" class="btn hover:bg-[#000048] text-center">Voeg Announcement Toe</a>';
            }
                    foreach(getAnnouncements($mysqli) as $row) {
                        echo "
                        <tr>
                            <td>
                                <div class='flex items-center space-x-3'>
                                   <div class='font-bold text-center'>".$row['AnnouncementTitle']."</div>
                                </div>
                            </td>
                            <td class='text-center'>";
                            
                            echo $row['AnnouncementText'];
                            
                            echo "</td>
                            <td class='text-center'>".$row['StartTime']."</td>
                            <td>";

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