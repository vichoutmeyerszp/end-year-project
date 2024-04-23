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
        height: 125vh;
        background-color: rgb(24, 24, 24);
      }
      img {
        height: 200;
        width: 300;
      }
    
    </style>

<body>



<div class="carousel w-124 p-4 space-x-4 bg-neutral rounded-box">
  <div class="carousel-item h-104 p-54  p-200">
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
      if(isset($_SESSION['admin']) == "true") {
      echo' <a href="tblMaintenance.php?enableColor" class="btn btn-error">Set Maintenance</a>';
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
if(isset($_SESSION['admin']) == "true") {
echo' <a href="tblMaintenance.php?enableSpaceInvaders" class="btn btn-error">Set Maintenance</a>';
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
if(isset($_SESSION['admin']) == "true") {
echo' <a href="tblMaintenance.php?enableTetris" class="btn btn-error">Set Maintenance</a>';
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

if(checkmaintenanceTetris($mysqli) == "0") {
echo' <a href="./Games/BSC/BSC.php" class="btn btn-primary">Play now!</a></a>';
if(isset($_SESSION['admin']) == "true") {
echo' <a href="tblMaintenance.php?enableBSC" class="btn btn-error">Set Maintenance</a>';
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
           <p>Vind je jezelf een gelukzak? Dat zal het spel wel bepalen. Hoeveel keer kan je winnen zonder te verliezen of gelijkspel te krijgen? </p>
          </div>
        </div>
  <div class="card-actions">
  <?php

if(checkmaintenanceSnake($mysqli) == "0") {
echo' <a href="./Games/Snake/Snake.php" class="btn btn-primary">Play now!</a></a>';
if(isset($_SESSION['admin']) == "true") {
echo' <a href="tblMaintenance.php?enableSnake" class="btn btn-error">Set Maintenance</a>';
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

</body>
</html>