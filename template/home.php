<?php

//make html a function
function the_game(){
    echo ' 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Dogecoin Memory Game</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <link href="./css/memory.css" media="screen" rel="Stylesheet" type="text/css">
</head>
<body>

    <div id="field">
      <div class="card" style="left: 300px; top: 450px;"><img src="./image/back.png" style="left: 0px; width: 140px;"></div>
      <div class="card" style="left: 450px; top: 450px;"><img src="./image/back.png" style="left: 0px; width: 140px;"></div>
      <div class="card" style="top: 450px;"><img src="./image/back.png" style="left: 0px; width: 140px;"></div>
      <div class="card" style="left: 450px; top: 150px;"><img src="./image/back.png" style="left: 0px; width: 140px;"></div>
      
      <div class="card" style=""><img src="./image/back.png" style="left: 0px; width: 140px;"></div>
      <div class="card" style="top: 300px;"><img src="./image/back.png" style="left: 0px; width: 140px;"></div>
      <div class="card" style="left: 450px;"><img src="./image/back.png" style="left: 0px; width: 140px;"></div>
      <div class="card" style="left: 150px; top: 150px;"><img src="./image/back.png" style="left: 0px; width: 140px;"></div>
      
      <div class="card" style="top: 150px;"><img src="./image/back.png" style="left: 0px; width: 140px;"></div>
      <div class="card" style="left: 300px;"><img src="./image/back.png" style="left: 0px; width: 140px;"></div>
      <div class="card" style="left: 150px; top: 450px;"><img src="./image/back.png" style="left: 0px; width: 140px;"></div>
      <div class="card" style="left: 300px; top: 300px;"><img src="./image/back.png" style="left: 0px; width: 140px;"></div>
      
      <div class="card" style="left: 300px; top: 150px;"><img src="./image/back.png" style="left: 0px; width: 140px;"></div>
      <div class="card" style="left: 450px; top: 300px;"><img src="./image/back.png" style="left: 0px; width: 140px;"></div>
      <div class="card" style="left: 150px; top: 300px;"><img src="./image/back.png" style="left: 0px; width: 140px;"></div>
      <div class="card" style="left: 150px;"><img src="./image/back.png" style="left: 0px; width: 140px;"></div>
      
      <div id="score">0</div>
      <div id="tries">0</div>
    </div>
    
    <div id="controls">
      <a href="#" onclick="shuffle()">shuffle cards</a><br/>
      <a href="#" onclick="shuffle(3)">shuffle cards (slowly)</a>
    </div>
        
    <script type="text/javascript" src="./js/prototype.s2.min.js"></script>
    <script type="text/javascript" src="./js/memory.js"></script>
  
</body>
</html>
';

}

?>