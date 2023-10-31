<?php
include "components/navbar.php";
include "functions/adminFunctions.php";


if(!(isset($_SESSION['login']))) {
    header("Location: index.php");
}
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
<body class="min-h-screen bg-[#F1FAEE]">
    <div class="overflow-x-auto max-w-4xl mx-auto p-3">
        <table class="table bg-white shadow-lg">
            <thead>
                <tr>
                    <th>Announcements</th>
                    <th class="text-center">Descriptie</th>
                    <th class="text-center">Eindtijd</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach (getAnnouncements($mysqli) as $row) {
                        echo "
                        <tr>
                            <td>
                                <div class='flex items-center space-x-3'>
                                    <div class='font-bold'>".$row['Announcementid']."</div>
                                    <div class='text-sm opacity-50'>".$row['voornaam']." ".$row['naam']."</div>
                                    </div>
                                </div>
                            </td>
                            <td class='text-center'>"; 
                            
                            $row['AnnouncementText'];
                            
                            echo "</td>
                            <td class='text-center'>".$row['EndTime']."</td>
                            <th class='text-center'>
                            </th>
                            <td>";
                            if($row["admin == 1"]){
                             echo "<a href='verwijderUitFavorieten.php?product=".$row['productid']."'><button class='btn btn-sm btn-circle btn-ghost'>✕</button>";
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