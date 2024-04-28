<?php
include "components/navbar.php";

 if(isset($_POST['Feedback'])) {
    addReview($mysqli, $_POST['spel'], $_SESSION['login'], $_POST['feedback'], $_POST['score']);
    }
?>






<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Game World</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.4/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

  <h1 class="md:text-center text-4xl font-bold mb-8">Geef uw feedback</h1>

  <form action="feedback.php" method="post" enctype="multipart/form-data" class="flex flex-col gap-8 w-full md:max-w-2xl  justify-items-center">

  <?php
  if(isset($_GET['Colors'])) {
   echo '<input type="text" name="spel" value="Colors" class="input input-bordered w-full" hidden />';
  }

  if(isset($_GET['SpaceInvaders'])) {
    echo '<input type="text" name="spel" value="SpaceInvaders" class="input input-bordered w-full" hidden />';
  }

  if(isset($_GET['Tetris'])) {
    echo '<input type="text" name="spel" value="Tetris" class="input input-bordered w-full" hidden />';
  }

  if(isset($_GET['BSC'])) {
    echo '<input type="text" name="spel" value="BSC" class="input input-bordered w-full" hidden />';
  }

  if(isset($_GET['Snake'])) {
    echo '<input type="text" name="spel" value="Snake" class="input input-bordered w-full" hidden />';
  }


  ?>

        <div class="justify-center items-center">
          <label class="label">
            <span class="label-text md:text-center">Wat vond je van spel?</span>
          </label>
          <input type="text" name="feedback" class="input input-bordered w-full" placeholder="Voer hier je feedback in..." required />
        </div>


      
      <div class="justify-center items-center">
          <label class="label">
            <span class="label-text md:text-center">Op een score van 10, hoeveel geef je het?</span>
          </label>
          <input type="number" name="score" class="input input-bordered w-full" placeholder="0" min="0" max="10" required />
        </div>
    <button name="Feedback" class="btn btn-primary">Geef feedback</button>
  </form>
