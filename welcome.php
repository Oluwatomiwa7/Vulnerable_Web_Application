<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center;background-color:#bcdcef; }
    </style>
	
</head>
 <header style="background-color: #304030; height: 80px;width: 100%">
	<h1 style="font-size: 30px; color: white;text-align: center; padding-top: 15px;">Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?></h1>
	
	</header>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
	<h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
	
	<div class="reg">
	KIndly register you detail below
	<a href="contact.html>Fill your details</a>
	KIndly register you detail below
	<a href="customer.html">Fill your details</a>
	
	
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>
</html>