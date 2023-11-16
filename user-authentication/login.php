<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $host = "localhost";
  $dbusername="root";
  $dbpassword="";
  $dbname="login";

  $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

  if($conn->connect_error){
    die("Connection failed: ". $conn->$coonect_error);
  }

  $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";

  $result = $conn->query($query);

  if($result->num_rows == 1){
    $_SESSION['username'] = $username;
        header("Location: home.php");
    exit();
  }
  else{
    header("Location: index.html");
    exit();
  }

  $conn->close();

}

?>