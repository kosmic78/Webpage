<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="meniu.css">
    <link rel="stylesheet" type="text/css" href="studio.css">
    <title>Drum machines</title>
</head>
<body>
    <div class="navbar">
        <div class="logo">
          <img class="logoimg" src="339-3395400_world-wide-web-clipart-computer-world-website-logo.png">
        </div>
        <nav>
        <ul class="">
          <li> <a href="homepage.html">Homepage</a></li>
          <li><a href="">Despre noi</a></li>
          <div class="dropdown">
            <li>
              <a href="">Studio</a>
              <div class="dropdown-content">
                <a href="Boxe.html">Boxe</a>
                <a href="Instrumente pentru studio.html">Drum machines</a>
                <a href="Synth.html">Synth-uri</a>
              </div>
            </li>
          </div>
        </ul>
      </nav>
        </div>
        <div class="sidebar">
          <a href="https://www.facebook.com/cristikart/"><p><img class="sidebarfb" src="27d542e2e2626de4c08ee3d84aaabb7b.png"></p></a>
          <a href=""></a><p><img class="sidebarinsta" src="3f7756330cd418e46e642254a900a507.jpg"></p>
          <a href="https://gabor2.bandcamp.com/track/cryptomonede"><p><img class="sidebarbandcamp" src="bandcamp.png"></p></a>    
        </div>
        <div id="sectiune" class="sectiune">
            <div class="row">
                <div class="col-4">
                    <img class="electribe" src="8557493_sa.jpg">
                    <h4>Electribe EMX-1</h4>
                    <p>2500 RON</p>
                 </div>
                 <div class="col-4">
                    <img class="digitakt" src="12385267_800.jpg">
                    <h4>Electron Digitakt</h4>
                    <p>3611 RON</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img class="tr8" src="tr-8s_1.jpg">
                    <h4>Roland TR-8S</h4>
                    <p>2000 RON</p>
                 </div>
                 <div class="col-4">
                    <img class="electribe" src="11419406_800.jpg">
                    <h4>Electribe Blue</h4>
                    <p>1847 RON</p>
                 </div>
            </div>
            <div class="controller"></div>
            <button type="button" id="selector" onclick="functie()" class="active"></button>
        </div>
        <div id="sectiune2" class="sectiune2">
          <div class="row">
            <div class="col-4">
                <img class="Behringer" src="thumb_large_d_gallery_base_d1576102.jpg">
                <h4>Behringer TD-3 Galben</h4>
                 <p>530 RON</p>
            </div>
            <div class="col-4">
             <img class="juno" src="12505132_800.jpg">
                <h4>Roland TR8</h4>
                <p>1719 RON</p>
             </div>
        </div>
        <div class="row">
        <div class="col-4">
            <img class="Behringer" src="thumb_d_gallery_base_5256d59e.jpg">
            <h4>Akai Tom Cat</h4>
            <p>794 RON</p>
        </div>
        <div class="col-4">
         <img class="Behringer" src="alesis-sr-18-drum-machine.jpg">
            <h4>Alesis SR-18</h4>
            <p>950 RON</p>
         </div>
        </div>
        </div>
        <div id="controller2" class="controller2"></div>
        <button type="button" id="selector2" class="active2"></button>
        </div>
      </div>
      </div>
    <script>
     var linie=document.getElementById("sectiune");
     var linie2=document.getElementById("sectiune2");
     var buton=document.getElementById("selector");
     var buton2=document.getElementById("selector2");
     var controller2=document.getElementById("controller2");
      buton.onclick=function(){
        linie.style.transform='translateX(-135%)';
        linie2.style.transform='translateX(-135%)';
        buton2.style.transform='translateX(-450%)';
        controller2.style.transform="translateX(-161%)";
      }
      buton2.onclick=function(){
        linie.style.transform='translateX(5%)';
        linie2.style.transform='translateX(5%)';
        buton2.style.transform='translateX(450%)';
        controller2.style.transform="translateX(161%)";
      }
    </script>
</body>
</html>