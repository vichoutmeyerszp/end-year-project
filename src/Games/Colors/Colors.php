<html lang="en"><head>
    <meta charset="UTF-8">
    <title>Color Guess</title>
    <link rel="stylesheet" href="Colors.css">
    <link rel="icon" href="fav.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   <img src="data/Correct.png" alt="" id="checkmark">
   <img src="data/Wrong.png" alt="" id="wrong">
    <div class="top">
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

<script src="Colors.js"></script>
</body></html>