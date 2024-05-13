<?php
include "components/navbar.php";
include "./functions/maintenanceFunctions.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Game World</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.4/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<style>

      h1 {
        margin: 0px;
        margin-bottom: 10px;
        font-size: 2.9em;
        font-family: "Helvetica";
      }

        body {
        display: flex;
         /*  align-items: center;*/

        flex-direction: column;
        height: 100vh;
        background-color: rgb(24, 24, 24);
      }
      img {
        height: 200;
        width: 800;
      }
    
    </style>

<body>



<div class="carousel w-124 p-4 h-max space-x-4 bg-neutral scroll-smooth">
  <div class="carousel-item h-104  p-200">
  <div class="card w-96 bg-[#D3D3D3] shadow-xl">
 <div class="card-body items-center text-center">
    <h1 class="card-title">Colors</h1>
  <figure class="px-10 pt-10">
    <img src="../public/importantimages/ColorGame.jpg" alt="ColorGame.jpg" height="250" width="400"  class="rounded-xl" />
  </figure>

    <div class="collapse bg-base-200">
      <input type="checkbox" /> 
       <div class="collapse-title text-xl font-medium">
          Info over het spel
           </div>
           <div class="collapse-content"> 
             <p>In dit klein spelletje gaan we kijken of je jezelf niet kan mislopen. Je krijgt 2 woorden, en het is de bedoeling je in de 2 woorden de kleur vergelijking zoekt. Veel succes!</p>
            </div>
          </div>
    <div class="card-actions">
    <?php

      if(checkmaintenanceColors($mysqli) == "0") {
      echo' <a href="./Games/Colors/Colors.php" class="btn btn-primary">Play now!</a>';
      if(isset($_SESSION['login'])) {
        echo'
            <a href="feedback.php?Colors" class="btn btn-accent">Feedback geven</a>';
      }
      if(isset($_SESSION['admin']) == "true") {
        
      echo' <div class="dropdown">
              <div tabindex="0" role="button" class="btn m-1">Admin </div>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                    <a href="tblMaintenance.php?enableColor" class="btn btn-error">Set Maintenance</a>
                    <a href="feedbackBekijken.php?Colors" class="btn btn-accent">Feedback bekijken</a>
               </ul>
             </div>';
      }
    }
      else {
        echo'<input type="email" name="email" value="In onderhoud..."  class="input input-bordered w-full max-w-md text-black bg-white items-center text-center" disabled/>';
        if(isset($_SESSION['admin']) == "true") {
         echo' <a href="tblMaintenance.php?disableColor" class="btn btn-success">Disable Maintenance</a>';
      }
    }
    ?>
    </div>
  </div>
 </div>

 <br>

  </div> 
  <div class="carousel-item h-104 scroll-px-56">
  <div class="card w-96 bg-[#D3D3D3] shadow-xl">
<div class="card-body items-center text-center">
 <h1 class="card-title">Space invaders</h1>
  <figure class="px-10 pt-10">
    <img src="../public/importantimages/Space_Invaders.png" alt="Space Invaders.png" height="250" width="400"  class="rounded-xl" />
  </figure>



      <div class="collapse bg-base-200">
      <input type="checkbox" /> 
       <div class="collapse-title text-xl font-medium">
          Info over het spel
           </div>
           <div class="collapse-content"> 
             <p>Space Invaders is een spel waarbij je in een ruimteschip alien neerschiet om jezelf en de rest van de mensheid te becshermen. Kruip vlug in je ruimteschip, vlieg naar de ruimte, en schiet de aliens neer om je ras te redden! </p>
            </div>
          </div>
    <div class="card-actions">
    <?php
if(checkmaintenanceSpaceInvaders($mysqli) == "0") {
echo' <a href="./Games/SpaceInvaders/SpaceInvaders_Menu.php" class="btn btn-primary">Play now!</a>';
if(isset($_SESSION['login'])) {
  echo'
      <a href="feedback.php?SpaceInvaders" class="btn btn-accent">Feedback geven</a>';
}
if(isset($_SESSION['admin']) == "true") {
echo'  <div class="dropdown">
              <div tabindex="0" role="button" class="btn m-1">Admin </div>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                  <a href="tblMaintenance.php?enableSpaceInvaders" class="btn btn-error">Set Maintenance</a>
                  <a href="feedbackBekijken.php?SpaceInvaders" class="btn btn-accent">Feedback bekijken</a>
                </ul>
              </div>';
}
}
else {
  echo'<input type="email" name="email" value="In onderhoud..."  class="input input-bordered w-full max-w-md text-black bg-white items-center text-center" disabled/>';
  if(isset($_SESSION['admin']) == "true") {
   echo' <a href="tblMaintenance.php?disableSpaceInvaders" class="btn btn-success">Disable Maintenance</a>';
}
}
?>
      
    </div>
  </div>
</div>
</div> 


  <div class="carousel-item h-104">
  <div class="card w-96 bg-[#D3D3D3] shadow-xl">
<div class="card-body items-center text-center">
 <h1 class="card-title">Tetris</h1>
  <figure class="px-10 pt-10">
    <img src="../public/importantimages/Tetris.jpg" alt="Tetris.jpg" height="250" width="400"  class="rounded-xl" />
  </figure>


      <div class="collapse bg-base-200">
      <input type="checkbox" /> 
       <div class="collapse-title text-xl font-medium">
          Info over het spel
           </div>
           <div class="collapse-content"> 
             <p>Welkom bij Tetris. Dit spel gebruik al je brain-power. Bedenk een strategie voor be blokken, blijf kalm, en laat de blokken maar vallen!</p>
            </div>
          </div>
    <div class="card-actions">
    <?php

if(checkmaintenanceTetris($mysqli) == "0") {
echo' <a href="./Games/Tetris/tetris.php" class="btn btn-primary">Play now!</a>';
if(isset($_SESSION['login'])) {
  echo'
      <a href="feedback.php?Tetris" class="btn btn-accent">Feedback geven</a>';
}
if(isset($_SESSION['admin']) == "true") {
echo' <div class="dropdown">
        <div tabindex="0" role="button" class="btn m-1">Admin </div>
         <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
          <a href="tblMaintenance.php?enableTetris" class="btn btn-error">Set Maintenance</a>
          <a href="feedbackBekijken.php?Tetris" class="btn btn-accent">Feedback bekijken</a>
         </ul>
        </div>';
}
}
else {
  echo'<input type="email" name="email" value="In onderhoud..."  class="input input-bordered w-full max-w-md text-black bg-white items-center text-center" disabled/>';
  if(isset($_SESSION['admin']) == "true") {
   echo' <a href="tblMaintenance.php?disableTetris" class="btn btn-success">Disable Maintenance</a>';
}
}
?>

    </div>
  </div>
</div>

<br>

</div> 
  <div class="carousel-item h-104">
  <div class="card w-96 bg-[#D3D3D3] shadow-xl">
<div class="card-body items-center text-center">
 <h1 class="card-title">Blad Steen Schaar</h1>
  <figure class="px-10 pt-10">
    <img src="../public/importantimages/BSC.jpg"  height="800" width="1000" alt="BSC.jpg" class="rounded-xl" />
  </figure>


      <div class="collapse bg-base-200">
      <input type="checkbox" /> 
       <div class="collapse-title text-xl font-medium">
          Info over het spel
           </div>
           <div class="collapse-content"> 
             <p>Vind je jezelf een gelukzak? Dat zal het spel wel bepalen. Hoeveel keer kan je winnen zonder te verliezen of gelijkspel te krijgen? </p>
            </div>
          </div>
    <div class="card-actions">
    <?php

if(checkmaintenanceBSC($mysqli) == "0") {
echo' <a href="./Games/BSC/BSC.php" class="btn btn-primary">Play now!</a>';
if(isset($_SESSION['login'])) {
  echo'
      <a href="feedback.php?BSC" class="btn btn-accent">Feedback geven</a>';
}
if(isset($_SESSION['admin']) == "true") {
echo' <div class="dropdown">
        <div tabindex="0" role="button" class="btn m-1">Admin </div>
         <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
          <a href="tblMaintenance.php?enableBSC" class="btn btn-error">Set Maintenance</a>
          <a href="feedbackBekijken.php?BSC" class="btn btn-accent">Feedback bekijken</a>
         </ul>
        </div>';
}
}
else {
  echo'<input type="email" name="email" value="In onderhoud..."  class="input input-bordered w-full max-w-md text-black bg-white items-center text-center" disabled/>';
  if(isset($_SESSION['admin']) == "true") {
   echo' <a href="tblMaintenance.php?disableBSC" class="btn btn-success">Disable Maintenance</a>';
}
}

?>
    </div>
  </div>
</div>

<br>

</div>

<div class="carousel-item h-104">
<div class="card w-96 bg-[#D3D3D3] shadow-xl">
<div class="card-body items-center text-center">
<h1 class="card-title">Snake</h1>
<figure class="px-10 pt-10">
  <img src="../public/importantimages/Snake.jpg"  height="800" width="1000" alt="Snake.jpg" class="rounded-xl" />
</figure>


    <div class="collapse bg-base-200">
    <input type="checkbox" /> 
     <div class="collapse-title text-xl font-medium">
        Info over het spel
         </div>
         <div class="collapse-content"> 
           <p>Ah, snake... altijd een grote vraatslust, maar toch zo klunzig met zijn staart. Kan je hem helpen zoveel mogelijk appels te eten zonder tegen zijn staart of de muur te botsen?</p>
          </div>
        </div>
  <div class="card-actions">
  <?php

if(checkmaintenanceSnake($mysqli) == "0") {
echo' <a href="./Games/Snake/Snake.php" class="btn btn-primary">Play now!</a>';
if(isset($_SESSION['login'])) {
  echo'
      <a href="feedback.php?Snake" class="btn btn-accent">Feedback geven</a>';
}
if(isset($_SESSION['admin']) == "true") {
echo' <div class="dropdown">
        <div tabindex="0" role="button" class="btn m-1">Admin </div>
          <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
            <a href="tblMaintenance.php?enableSnake" class="btn btn-error">Set Maintenance</a>
            <a href="feedbackBekijken.php?Snake" class="btn btn-accent">Feedback bekijken</a>
          </ul>
        </div>';
}
}
else {
echo'<input type="email" name="email" value="In onderhoud..."  class="input input-bordered w-full max-w-md text-black bg-white items-center text-center" disabled/>';
if(isset($_SESSION['admin']) == "true") {
 echo' <a href="tblMaintenance.php?disableSnake" class="btn btn-success">Disable Maintenance</a>';
}
}
?>

    </div>
  </div>
    </div>



<?php

?>
  </div> 
</div>


<footer class="footer footer-center p-10 bg-neutral text-primary-content">
  <aside>
    <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="inline-block fill-current"><path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path></svg>
    <p class="font-bold">
      Project made by Vic Houtmeyers <br>Not expecting any new updates unless I feel like it.
    </p> 
    <p>Copyright © 2024 - Feel free to borrow</p>
  </aside> 

</footer>
</body>
</html>