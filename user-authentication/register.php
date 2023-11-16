<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section class="index">
      <div class="login-container">
        <h2>Registration</h2>
        <form class="login-form" action="register_process.php" method="POST">
          <div class="input-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required />
          </div>
          <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required />
          </div>
          <button type="submit" value="Register" class="login-btn">
            Register
          </button>
        </form>
      </div>
    </section>
  </body>
</html>
