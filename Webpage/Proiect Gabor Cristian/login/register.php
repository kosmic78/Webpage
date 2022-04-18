<?php
  session_start();
  include("connection.php");
  include("functions.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];
    $email=$_POST['email'];
    if(!empty($username)&&!empty($password)&&!empty($password2)&&!empty($email)){
          $userid=random_num(20);
          $query="insert into users (user_id,user_name,password,email) values ('$userid','$username','$password','$email')";
          mysqli_query($con,$query);
          $to=$email;
          $subject="Register data";
          $message=$username . $password;
          $headers="From: cristiangabor01@yahoo.com";
          mail($to,$subject,$message,$headers);
          header("Location: login.php");
          die;
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
        <a href="login.php" id="butonlogin" class="butonregister">Login</a>
        <button type="button" id="butonreg" class="butonregister" onclick="register()">Register</button>
      </div>
      <form id="formular"  method="post">
        <input type="text"  placeholder="Nickname" class="casutalogin" name="username"></input>
        <input type="password"  placeholder="Password" class="casutalogin" name="password"></input>
        <input type="password"  placeholder="Retype password" class="casutalogin" name="password2"></input>
        <input type="text"  placeholder="Email" class="casutalogin" name="email"></input>
        <input type="submit" value="Register"  class="butonparola"></input>
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