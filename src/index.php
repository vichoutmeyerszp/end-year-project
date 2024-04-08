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
        height: 150vh;
        background-color: rgb(24, 24, 24);
      }

    
    </style>

<body>





<div class="carousel w-124 p-4 space-x-4 bg-neutral rounded-box">
  <div class="carousel-item h-104 p-54  p-200">
  <div class="card w-96 bg-[#D3D3D3] shadow-xl">
 <div class="card-body items-center text-center">
    <h1 class="card-title">Colors</h1>
  <figure class="px-10 pt-10">
    <img src="../public/importantimages/ColorGame.jpg" alt="ColorGame.jpg" class="rounded-xl" />
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
    <a href="./Games/Colors/Colors.php" class="btn btn-primary">Play now!</a>
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
    <img src="../public/importantimages/Space_Invaders.png" alt="Space Invaders.png" class="rounded-xl" />
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
      <a href="./Games/SpaceInvaders/SpaceInvaders_Menu.php" class="btn btn-primary">Play now!</a>
    </div>
  </div>
</div>
</div> 


  <div class="carousel-item h-104">
  <div class="card w-96 bg-[#D3D3D3] shadow-xl">
<div class="card-body items-center text-center">
 <h1 class="card-title">Tetris</h1>
  <figure class="px-10 pt-10">
    <img src="../public/importantimages/Tetris.jpg" alt="Tetris.jpg" class="rounded-xl" />
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
      <a href="./Games/Tetris/tetris.php" class="btn btn-primary">Play now!</a>
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
    <img src="../public/importantimages/BSC.jpg" alt="BSC.jpg" class="rounded-xl" />
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
      <a href="./Games/BSC/BSC.php" class="btn btn-primary">Play now!</a>
    </div>
  </div>
    </div>



<?php

?>
  </div> 
</div>

</body>
</html>