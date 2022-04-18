<?php
  session_start();
  include("connection.php");
  include("functions.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    $username=$_POST['userlogin'];
    $password=$_POST['passwordlogin'];
    if(!empty($username)&&!empty($password)){
          $query="select * from users where user_name='$username' limit 1";
          $result=mysqli_query($con,$query);
          if($result&&mysqli_num_rows($result)>0){
            $userdata=mysqli_fetch_assoc($result);
            if($userdata['password']==$password){
              $_SESSION['user_id']==$userdata['user_id'];
              header("Location: homepage.php");
              die;
            }
        }
    }
    else
    die("Please enter valid information!");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="meniu.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login</title>
</head>
<body>
  <div class="navbar">
    <div class="logo">
      <img class="logoimg" src="339-3395400_world-wide-web-clipart-computer-world-website-logo.png">
    </div>
  </div>
    <div class="sidebar">
      <a href="https://www.facebook.com/cristikart/"><p><img class="sidebarfb" src="27d542e2e2626de4c08ee3d84aaabb7b.png"></p></a>
        <a href=""></a><p><img class="sidebarinsta" src="3f7756330cd418e46e642254a900a507.jpg"></p>
        <a href="https://gabor2.bandcamp.com/track/cryptomonede"><p><img class="sidebarbandcamp" src="bandcamp.png"></p></a>    
    </div>
    <div class="login">
      <div class="butonbox">
        <div id="btn"></div>
        <button type="button" id="butonlogin" class="butonregister" onclick="login()">Login</button>
        <a href="register.php" id="butonreg" class="butonregister">Register</a>
      </div>
      <form id="loginform" method="post" class="formular">
        <input type="text" placeholder="Nickname" name="userlogin" class="casutalogin"></input>
        <input type="text"  placeholder="Password" name="passwordlogin" class="casutalogin"></input>

        <button type="button"  class="butonparola" onclick="">Am uitat parola</button>
        <input type="submit"  class="butonparola" name="submit" value="Login"></input>
      </form>
      
    </div>
    <script>
      var x=document.getElementById("loginform");
      var y=document.getElementById("register");
      var z=document.getElementById("btn");
      var a=document.getElementById("butonlogin");
      var b=document.getElementById("butonreg");
      function register(){
        x.style.left="-400px";
        y.style.left="50px";
        z.style.left="110px";
        a.style.backgroundColor="#000000"
      }
      function login(){
        x.style.left="50px";
        y.style.left="450px";
        z.style.left="0px";
      }
    </script>
</body>
</html>