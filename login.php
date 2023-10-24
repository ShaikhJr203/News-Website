<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$login = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = " SELECT * from users.username where username = '$username' AND password = '$password'";

    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if($num == 1){
        $login= true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // header("location : welcome.php");
        echo "<script>window.location.href='welcome.php';</script>";

    }
    else{
        $showError = "Password do not match";
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login- NewsExpress</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <?php
    if($login){
    echo '<div class="alert alert-success" role="alert">
    <strong>Success</strong> You are logged in
    </div>' ;
    }
    if($showError){
        echo '<div class="alert alert-danger" role="alert">
        <strong>Error</strong> '.$showError.'';
        }
    ?>
    <div class="container">
        <h1 class = "text-center">login</h1>
        <form action = "/IPproject/login.php" method = "POST">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name ="password">
        </div>
        
        
        <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>
</html>