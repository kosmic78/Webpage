<?php
    session_start();
    include("connection.php");
    include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="meniu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="navbar">
      <div class="logo">
        <img class="logoimg" src="339-3395400_world-wide-web-clipart-computer-world-website-logo.png">
      </div>
      <nav>
      <ul class="">
        <li> <a href="homepage.html">Homepage</a></li>
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
      <p class="paragrafHomepage">Bun venit pe site-ul nostru! Pe acest site veti putea vedea diferite informatii despre aparate productia muzicala.
      </p>
      <p class="paragrafHomepage2">Dispunem de o gama larga de produse. Calitatea ne recomanda.</p>

</body>
</html>