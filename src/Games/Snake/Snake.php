<!DOCTYPE html>
<html>
<head>
  <title>Snake</title>
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="#" />


  <style>
  html, body {
    height: 100%;
    margin: 0;
  }

  h1 {
        margin: 0px;
        margin-bottom: 10px;
        font-size: 2.9em;
        font-family: "Helvetica";
  }

  body {
    background: black;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  canvas {
    border: 1px solid white;
  }
  </style>
</head>

<a href="../../index.php" class="btn btn-ghost normal-case text-xl text-white">Game World</a>
  <h1 class="text-white">Snake</h1>
<body>
<canvas width="400" height="400" id="game"></canvas>
<script src="Snake.js"></script>
</body>
</html>