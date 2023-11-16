<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

if (isset($_POST['logout'])) {
  session_destroy(); 
  header("Location: index.html"); 
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="homestyle.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="section1">
      <div class="nav">
        <div class="nav1">
          <h1>Esigned</h1>
        </div>
        <div class="nav2">
          <ul>
            <li>Home</li>
            <li>About</li>
            <li>What We Do</li>
            <li>Portfolio</li>
            <li>Contact Us</li>
            <div class="nav3">
              <i class="glyphicon glyphicon-user"></i>
              <i class="glyphicon glyphicon-search"></i>
            </div>
            <li><a href="register.html">Register</a></li>
            <form method="post" action="">
                 <button type="submit" name="logout">Logout</button>
            </form>
          </ul>
        </div>
      </div>
      <div class="below-nav">
        <p class="below-nav-p1">WELCOME TO</p>
        <p class="below-nav-p2">WEB AGENCY</p>
        <p class="below-nav-p3">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores quasi
          culpa sed, corporis reiciendis nulla?
        </p>
        <div class="button-container">
          <button class="exceptional-button">Contact Us</button>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
        </div>
      </div>
    </div>
  </body>
</html>
