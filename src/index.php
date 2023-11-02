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

<body class="h-screen bg-[#F8F8FF]">
  <tr>
    <th></th>
    <th></th>
    <th></th>
</tr>
<td>
<div class="card w-96 bg-[#D3D3D3]   shadow-xl">
<div class="card-body items-center text-center">
    <h2 class="card-title">Colors</h2>
  <figure class="px-10 pt-10">
    <img src="../public/importantimages/ColorGame.jpg" alt="Shoes" class="rounded-xl" />
  </figure>

    <div class="collapse bg-base-200">
      <input type="checkbox" /> 
       <div class="collapse-title text-xl font-medium">
          Info over het spel
           </div>
           <div class="collapse-content"> 
             <p>In dit klein spelletje gaan we kijken of je jezelf niet kan mislopen. Je krijgt een heleboel woorden, en het is de bedoeling dat je de kleur van het woord ingeef, terwijl het woord een ander kleur zal geven. Veel succes!</p>
            </div>
          </div>
    <div class="card-actions">
    <a href="SpaceInvaders.php" class="btn btn-primary">Play now!</a>
    </div>
  </div>
</div>
</td>

<td>
<div class="card w-96 bg-[#D3D3D3] shadow-xl">
<div class="card-body items-center text-center">
 <h2 class="card-title">Space invaders</h2>
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
      <a href="SpaceInvaders.php" class="btn btn-primary">Play now!</a>
    </div>
  </div>
</div>
</td>
  
</body>
</html>