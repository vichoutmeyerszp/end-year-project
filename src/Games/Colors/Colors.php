<html lang="en">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Colors.css">
    <link rel="icon" href="fav.png">
    
    <title>Colors</title>
</head>


<body>


    <div class="top">
       <a href="../../index.php" id="home">Game World</a>
       <button id="start" onclick="startGame()">Start</button>
        <div id="color1" class="colorText color1"></div>
        <div id="color2" class="colorText color2"></div>
    </div>
    <div class="bottom">
       <div class="row">
        <div id="Blue" class="color blue"></div>
        <div id="Red" class="color red"></div>
       </div>
       <div class="row">
        <div id="Green" class="color green"></div>
        <div id="Yellow" class="color yellow"></div>
       </div>
    </div>
    <span id="correct"></span>
    <span id="time"></span>
    <img src="data/Correct.jpg" alt="Correct" id="checkmark">
   <img src="data/Wrong.jpg" alt="Wrong" id="wrong">

<script src="Colors.js"></script>
</body></html>