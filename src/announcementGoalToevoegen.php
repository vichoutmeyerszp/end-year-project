<?php
include "components/navbar.php";

?>






<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Game World</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.4/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php
 if(isset($_POST['Feedback'])) {
    addGoal($mysqli, $_POST["Titel"], $_POST["Descriptie"], $_POST["Prijs"], $_POST["gemaakteTijdstip"] );
    header("Location:announcementGoals.php");

  }


?>
  <h1 class="md:text-center text-4xl font-bold mb-8">Toevoegen announcement</h1>

  <form action="announcementGoalToevoegen.php" method="post" enctype="multipart/form-data" class="flex flex-col gap-8 w-full md:max-w-2xl  mx-auto">


        <div class="justify-center items-center">
          <label class="label">
            <span class="label-text md:text-center">Titel naam</span>
          </label>
          <input type="text" name="Titel" class="input input-bordered w-full" placeholder="Voer hier de titel in..." required />
        </div>

        <div class="justify-center items-center">
          <label class="label">
            <span class="label-text md:text-center">Descriptie</span>
          </label>
          <input type="text" name="Descriptie" class="input input-bordered w-full" placeholder="Voer hier de descriptie in..." required />
        </div>

        <div class="justify-center items-center">
          <label class="label">
            <span class="label-text md:text-center">Prijs</span>
          </label>
          <input type="text" name="Prijs" class="input input-bordered w-full" placeholder="Voer hier de prijs in..." required />
        </div>



        <?php
        echo'
        <input type="date" name="gemaakteTijdstip" value='.date("Y-m-d").' hidden />
      </div>';
        ?>

    <button name="Feedback" class="btn btn-primary">Voeg announcement Toe</button>
  </form>

  <?php
      
      ?>