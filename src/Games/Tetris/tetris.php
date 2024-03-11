<html>
<head>
    <title>Tetris</title>
    <link rel="stylesheet" href="tetris.css">
</head>
<body>
    <div id="theHead">Welcome to Tetris!</div>
    <div id="newGame" onclick="runGame()" onmouseover="this.style.backgroundColor = 'goldenrod'" onmouseout="this.style.backgroundColor = 'gold'">New Game</div>
    <div id="creditBtn" onmouseover="this.style.backgroundColor = 'goldenrod'" onmouseout="this.style.backgroundColor = 'gold'" onclick="showControls()">Controls</div>
    <a href="../../index.php" id="creditBtn" onmouseover="this.style.backgroundColor = 'goldenrod'" onmouseout="this.style.backgroundColor = 'gold'">Hoofdpagina</a>
    <div id="credits">Klik de pijl naar beneden om het blok te laten zakken.
      <br>
      Klik op R om het blok te laten draaien.
      <br>
      <br>
      Haal zoveel mogelijk punten als je kan.
    </div>
    <div id="backBtn" onmouseover="this.style.backgroundColor = 'goldenrod'" onmouseout="this.style.backgroundColor = 'gold'" onclick="goBack()">Back</div>
    <div id="main">
    <div id="score"></div>
    <canvas id="tetris" width="240" height="400">
    </div>
    <script src="tetris.js"></script>
    <script>
      var runGame = function(){
        document.getElementById("newGame").style.display = "none";
        document.getElementById("theHead").style.display = "none";
        
 document.getElementById("credits").style.display = "none";       
        document.getElementById("main").style.display = "block";
        document.getElementById("creditBtn").style.display = "none";
        playerReset();
        updateScore();
        update();
      };
     var showControls = function(){
       document.getElementById("theHead").style.display = "none";
       document.getElementById("creditBtn").style.display = "none";
       document.getElementById("newGame").style.display = "none";
       document.getElementById("credits").style.display = "block";
       document.getElementById("backBtn").style.display = "block";
     };
      
    var goBack = function(){
      document.getElementById("backBtn").style.display = "none";
      document.getElementById("credits").style.display = "none";
      document.getElementById("theHead").style.display = "block";
      document.getElementById("newGame").style.display = "block";
      document.getElementById("creditBtn").style.display = "block";
    };
    </script>
    
</body>
<html>