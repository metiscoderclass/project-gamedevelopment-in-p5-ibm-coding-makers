<?php


$host = "localhost";
$user = "ayachi2003"; 
$pass = "";     
$db = "login";
$port = 3306;

$connection = mysqli_connect($host, $user, $pass, $db, $port);


$naam = $_POST["naam"];
$wachtwoord = $_POST["wachtwoord"];
$cwachtwoord = $_POST["cwachtwoord"];


$query = "INSERT INTO users(username,wachtwoord) VALUES ('$naam','$wachtwoord') ";

$resultaat = mysqli_query($connection,$query);


mysqli_close($connection);


?>



<!DOCTYPE html>	
<html>
  <head>
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="index.css" type="text/css" />  
      <script type="text/javascript" src="index.js"></script>
  </head>
  <body>
    <div class="user">
    <header class="user__header">
        <h1 class="user__title">Registreren</h1>
    </header>
    
    <form class="form" method="post">
        <div class="form__group">
            <input type="text" placeholder="Username" class="form__input" name="naam" />
        </div>
        
        <div class="form__group">
            <input type="password" placeholder="wachtwoord" class="form__input" name="wachtwoord" />
        </div>
        
        <div class="form__group">
            <input type="password" placeholder="confirm wachtwoord" class="form__input" name="cwachtwoord" />
        </div>
        
        <input onclick="window.open('https://flappy-bird-ayachi2003.c9users.io')" type="submit" class="btn" name="button"/>
    </form>
</div>
  </body>
</html>
