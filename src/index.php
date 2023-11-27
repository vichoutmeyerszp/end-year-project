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
        align-items: center;

        flex-direction: column;
        padding: 0px;
        margin: 0px;
        height: 100vh;
        background: linear-gradient(
          0deg,
          rgb(97, 98, 99) 0%,
          rgba(0, 0, 0, 0) 100%
        );
      }

      
    </style>

<body>


 
<div class="w-96 carousel rounded-box items-justify-center">
  <div class="carousel-item h-full">
  <div class="card w-96 bg-[#D3D3D3]   shadow-xl">
<div class="card-body items-center text-center">
    <h1 class="card-title">Colors</h1>
  <figure class="px-10 pt-10">
    <img src="../public/importantimages/ColorGame.jpg" alt="Shoes" class="rounded-xl" />
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
  </div> 
  <div class="carousel-item h-full">
  <div class="card w-96 bg-[#D3D3D3] shadow-xl">
<div class="card-body items-center text-center">
 <h1 class="card-title">Space invaders</h1>
  <figure class="px-10 pt-10">
    <img src="../public/importantimages/Space_Invaders.png" alt="Space Invaders" class="rounded-xl" />
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
      <a href="./Games/SpaceInvaders/SpaceInvaders.php" class="btn btn-primary">Play now!</a>
    </div>
  </div>
</div>
  </div> 
</div>

</body>
</html>