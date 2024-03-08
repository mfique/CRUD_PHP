<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Form</title>
</head>

<body>
    <h2>Login form</h2>
    <form action="" method="POST">
        <label for="email">Username</label>
        <input type="text" name="email"><br><br>

        <label for="password">Password</label>
        <input type="password" name="password"><br><br>

        <input type="submit" name="submit" value="login">
    </form>

    <?php
    include('connection.php');  // Added a semicolon at the end of the line

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['email'];
        $password = $_POST['password'];

        $result = $mysqli->query("SELECT * FROM users WHERE email='$username' AND password='$password'");

        if (!$result) {
            echo 'Error: ' . $mysqli->error;
            exit;
        }
    }
    ?>
</body>

</html>