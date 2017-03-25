<?php 
include_once('lib/Session.php');
Session::init();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Register System PHP OOP</title>
    <link href="inc/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="inc/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="inc/bootstrap.min.js"></script>
  </head>
  <body>
    
      <div class="container">
          <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="index.php">Login Registration System</a>
                </div>
                  <ul class="nav navbar-nav navbar-right">
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="register.php">Registration</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="#">Logout</a></li>
                      </ul>
                </div>
          </nav>