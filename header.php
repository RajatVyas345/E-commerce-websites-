<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top"> <div class="container">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-
    target="#myNavbar">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span> </button>
       <a class="navbar-brand" href="index.php">Lifestyle Store</a></div>
       <div class="collapse navbar-collapse" id="myNavbar"> 
       <ul class="nav navbar-nav navbar-right">
<?php
if (isset($_SESSION['email'])) {
?>
<li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping- cart"></span> Cart </a></li>
<li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
<li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log- in"></span> Logout</a></li>
?> <?php
} else { ?>
    <li><a href="SignupPage.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    <li><a href="LoginPage.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    <?php }
    ?> 
           </ul>
        </div> 
    </div>
</div>  
    
