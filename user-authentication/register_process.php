<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

$registrationResult = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "login";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $checkQuery = "SELECT * FROM user WHERE username='$username'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        $registrationResult = "Username already exists. Please choose another one.";
    } else {
        $insertQuery = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

        if ($conn->query($insertQuery) === TRUE) {
            $registrationResult = "Registration successful. You can now <a href='index.html'>login</a>.";
        } else {
            $registrationResult = "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }

    $conn->close();
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
            
            <form class="login-form" action="" method="POST">
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
            <?php echo $registrationResult; ?>
        </div>
    </section>
</body>

</html>
