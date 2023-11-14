<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.4/dist/full.css" rel="stylesheet" type="text/css" />
    <title>Profiel Bewerken</title>
</head>

<?php
include "connect.php";
include "functions/userFunctions.php";

if(!isset($_SESSION["login"])){
    header('location: index.php');
}

if (isset($_POST["wijzigen"])) {
    $gebruikerid = $_SESSION["login"];
    $email = $_POST["email"];
    $voornaam = $_POST["voornaam"];
    $naam = $_POST["naam"];
    $wachtwoord = $_POST["wachtwoord"];
    $upload_dir = $_SERVER['DOCUMENT_ROOT'] . "/end-year-project/public/images/";
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    if (filesize($file_name) < 0) {
      echo "Error";
    }
    if(isset($file_name) && !empty($file_name)) {

      $teller = 1;
      while (file_exists($upload_dir . $file_name)) {
          $file_info = pathinfo($file_name);
          $new_file_name = $file_info['filename'] . $teller . "." . $file_info['extension'];
          $file_name = $new_file_name;
          $teller++;
      }
      if (!(move_uploaded_file($file_tmp, $upload_dir . $file_name))) {
        echo "Error, kon de foto niet verplaatsen.";
      };
    }
    $beschrijving = $_POST["beschrijving"]; 
    if(updateUser($mysqli, $gebruikerid, $voornaam, $naam, $email, $wachtwoord, $file_name, $beschrijving)){
        header('location: index.php');
    }else{
        print $mysqli->error;
    }


}
    foreach(getUser($mysqli,$_SESSION["login"]) as $row){
        print'<body>
        <div>
          <div class="flex justify-start items-start">
            <a href="index.php" class="btn btn-ghost normal-case text-xl text-black">Game World</a> 
          </div>
          <form class="form-control h-full flex items-center justify-center" method="post" action="profielbewerken.php" enctype="multipart/form-data">
            <div class="card w-full max-w-lg shadow-2xl bg-white p-8 mx-auto justify-center items-center">
              <h2 class="text-black text-2xl mb-4">Bewerk Profiel</h2>
              <div class="flex flex-col gap-2">  
              <div class="flex flex-row gap-2"> 
                  <div class="flex flex-col w-full"> 
                  <label class="label text-black">Email</label>
                  <input type="email" name="email" value="' . $row["email"] . '"  class="input input-bordered w-full max-w-md text-black bg-white" disabled/>   
                  </div>
                </div>
              <div class="flex flex-row gap-2"> 
                  <div class="flex flex-col w-full"> 
                    <label class="label text-black">Voornaam</label>
                    <input type="text" name="voornaam" value="' . $row["voornaam"] . '" class="input input-bordered w-full max-w-md text-black bg-white" />
                  </div>
                  <div class="flex flex-col w-full"> 
                    <label class="label text-black">Achternaam</label>
                    <input type="text" name="naam" value="' . $row["naam"] . '" class="input input-bordered w-full max-w-md text-black bg-white" />
                  </div>
                </div>
                <div class="flex flex-row gap-2"> 
                    <div class="flex flex-col w-full"> 
                        <label class="label text-black">Wachtwoord</label>
                        <input type="password" name="wachtwoord" placeholder="Wachtwoord" class="input input-bordered w-full max-w-md text-black bg-white" />
                    </div>
                </div>
                <div class="flex flex-row gap-2">
                  <div class="flex flex-col w-full"> 
                    <label class="label text-black">Beschrijving</label>
                    <textarea class="textarea textarea-bordered h-24  text-black bg-white" name="beschrijving">'.$row["beschrijving"].'</textarea>
                  </div>
                </div>
                <div class="flex flex-row gap-2">
                  <div class="flex flex-col w-full"> 
                    <label class="label text-black">Profielfoto</label>
                    <input type="file" name="file" class="file-input file-input-bordered bg-white text-black" />
                  </div>
                </div>
                <input type="submit" value="submit" name="wijzigen"  class="btn btn-ghost text-black hover:text-white hover:bg-black">  
            </div>
        </div>
    </form>
</body>';
}
?>
</html> 