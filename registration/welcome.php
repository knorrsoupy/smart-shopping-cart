<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Smart Shopping System!</h1>
        <br>
        <h4>Please select your desired option.</h4>
        <br>
    </div>
    <p>
        <a href="https://smartcartshop.000webhostapp.com/" class="btn btn-success">Start Scanning</a>
        <br><br>
        <a href="recipe.html" class="btn btn-info">Recipes to Get You Started</a>
        <br><br><br><br>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    <br><br><br>
    <img src="welcome-image.png" alt="welcome-image" height="150" width="130">
    <br><br>
    <blockquote class="blockquote text-center" style="font: 16px sans-serif;">
  <p class="mb-0">Life is uncertain. Eat dessert first.</p>
  <footer class="blockquote-footer">Ernestine Ulmer<cite title="Source Title"></cite></footer>
</blockquote>
</body>
</html>
