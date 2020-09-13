<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- font awesome --->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
   <!---google font --->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:wght@500&display=swap" rel="stylesheet">
    <!--custom styling---->
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <title>Single Post</title>
</head>
<body>
    <header>

<div class="logo">
    <h1 class="logo-text"><span>Places</span></h1>
</div>
<i class="far fa far fa-bars menu-toggle"></i>
<ul class="nav">
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
   <!---- <li><a href="#">Sign Up</a></li> ---->
   <!---- <li><a href="#">Login</a></li> ----->
    <li>
        <a href="#">
        <i class="far fa far fa-user"></i>
        Izik
        <i class="far fa far fa-chevron-down drop-down" ></i>
    </a>  
    <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#" class="logout">Logout</a></li>
    </ul>
    </li>
</ul>
    </header>

 
<div class="auth-content">

<form action="register.php" class="action">
<h2 class="form-title">Register</h2>

<!-----div class="msg success error">
    <li>Username Required</li>
</div>
---->
<div>
    <label>Username </label>
    <input type="text" name="username" class="text-input">

</div>
<div>
    <label>Email </label>
    <input type="text" name="email" class="text-input">
</div>

<div>
    <label>Password </label>
    <input type="text" name="password" class="text-input">
</div>

<div>
    <label>Password Confirm </label>
    <input type="text" name="passwordConf" class="text-input">
</div>

<div>
 <button type="submit" name="register-btn" class="btn btn-big">REGISTER</button>
</div>
<p> Or <a href="login.php">Sign In</a></p>
</form>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="assets/js/scripts.js"> </script>
</body>
</html>