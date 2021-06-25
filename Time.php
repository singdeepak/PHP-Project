<html>
 
<head>
  <title>IFC-TIMER</title>
  <link rel="stylesheet" href="CSS/Time.css">
</head>
  <?php include 'Header.php' ?>
<body>
  <div id="header">
    <span class="title">
      ifc-timer
    </span><br><br>
  </div>
  
  <div id="main" class="center">
    <input id="minDisplayer" class="timeDisplayer" value="" readonly>
    <input id="secDisplayer" class="timeDisplayer" value="" readonly>
    <input id="msDisplayer" class="timeDisplayer" value="" readonly>
    
    <br><br>
    
    <span onclick="msStart()" id="startButton" class="button">START</span>
    <span id="resumeButton" class="button">RESUME</span>
    <span onclick="allStop()" id="stopButton" class="button">STOP</span>
    <span onclick="allReset()" id="resetButton" class="button">RESET</span>
  </div>
  <script src="JS/Time.js"></script>
  </body>  
  
  

  