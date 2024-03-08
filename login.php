<head>
    <body>
        <h2>Login form</h2>
        <form action="" method="POST">
            <label for="">Username</label>
            <input type="text" name="email"><br></br>
            <label for="">Password</label>
            <input type="text" name="password"><br></br>
            <input type="submit" name="submit" value="login">
        </form>


    <?php
   include('connection.php');

   if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['email'];
    $password = $_POST['password'];
   }

   $results = $mysqli->query("SELECT * FROM users WHERE email='$username' AND password='$password'");

   if(!$result) {
    echo 'Error: ' .$mysqli ->error;
    exit;
   }

   if($result->num_rows> 0){
    session_start();
    $_SESSION['email'] = $email;
    header('Location:homepage.php');
    exit;
   } else {
    echo'<script>alert("Invalid username or password.")</script>'
   }
   ?>
 </body>