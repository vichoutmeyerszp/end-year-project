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
  addReview($mysqli, $_POST['spel'], $_SESSION['login'], $_POST['feedback'], $_POST['rating-10']);
  echo '<div role="alert" class="alert alert-success">
  <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z mx-auto" /></svg>
  <span>Uw feedback is met succes doorgestuurd!</span>
</div>';
  }


?>
  <h1 class="md:text-center text-4xl font-bold mb-8">Geef uw feedback</h1>

  <form action="feedback.php" method="post" enctype="multipart/form-data" class="flex flex-col gap-8 w-full md:max-w-2xl  mx-auto">

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
          <div class="rating rating-lg rating-half">
            <input type="radio" name="rating-10" value="0"  class="rating-hidden" />
            <input type="radio" name="rating-10" value="1"  class="bg-yellow-400 mask mask-star-2 mask-half-1" />
            <input type="radio" name="rating-10" value="2"  class="bg-yellow-400 mask mask-star-2 mask-half-2" />
            <input type="radio" name="rating-10" value="3"  class="bg-yellow-400 mask mask-star-2 mask-half-1" />
            <input type="radio" name="rating-10" value="4"  class="bg-yellow-400 mask mask-star-2 mask-half-2" />
            <input type="radio" name="rating-10" value="5"  class="bg-yellow-400 mask mask-star-2 mask-half-1" />
            <input type="radio" name="rating-10" value="6"  class="bg-yellow-400 mask mask-star-2 mask-half-2" />
            <input type="radio" name="rating-10" value="7"  class="bg-yellow-400 mask mask-star-2 mask-half-1" />
            <input type="radio" name="rating-10" value="8"  class="bg-yellow-400 mask mask-star-2 mask-half-2" />
            <input type="radio" name="rating-10" value="9"  class="bg-yellow-400 mask mask-star-2 mask-half-1" />
            <input type="radio" name="rating-10" value="10" class="bg-yellow-400 mask mask-star-2 mask-half-2" />
          </div>
        </div>
    <button name="Feedback" class="btn btn-primary">Geef feedback</button>
  </form>

  <?php
      
      ?>