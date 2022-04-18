<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="meniu.css">
    <link rel="stylesheet" type="text/css" href="boxe.css">
    <title>Boxe</title>
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
                    <img class="adam" src="adam-audio-t7v.jpg">
                    <h4>Adam T7V</h4>
                    <p>890 RON</p>
                 </div>
                 <div class="col-4">
                    <img class="yamaha" src="monitor-studio-yamaha-hs7.jpg">
                    <h4>Yamaha HS7</h4>
                     <p>932 RON</p>
                </div>
            </div>
            <div class="row">
            <div class="col-4">
                <img class="monkey" src="monkey-banana-gibbon-5-red.jpg">
                <h4>MONKEY BANANA Gibbon 5</h4>
                <p>799 RON</p>
            </div>
            <div class="col-4">
             <img class="maudio" src="m-audio-boxa-monitor-activ-150w-copie-5009-4822.jpg">
                <h4>M-Audio BX5-D3</h4>
                <p>445 RON</p>
             </div>
            </div>
            <div class="controller"></div>
            <button type="button" id="selector" onclick="functie()" class="active"></button>
        </div>
        <div id="sectiune2" class="sectiune2">
          <div class="row">
            <div class="col-4">
                <img class="sdj80x" src="pioneer-sdj80x-logo.jpg">
                <h4>Pioneer S-DJ 80X</h4>
                <p>1129 RON</p>
             </div>
             <div class="col-4">
                <img class="sdj50x" src="pioneer-s-dj50-x-black-.jpg">
                <h4>Pioneer S-DJ 50X</h4>
                 <p>749 RON</p>
              </div>
        </div>
        <div class="row">
        <div class="col-4">
            <img class="a7x" src="f3c30f-A7X_detail3.jpg">
            <h4>Adam A7X</h4>
            <p>2517 RON</p>
        </div>
        <div class="col-4">
         <img class="genelec" src="11919231_800.jpg">
            <h4>Genelec 8030 CP</h4>
            <p>2458 RON</p>
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