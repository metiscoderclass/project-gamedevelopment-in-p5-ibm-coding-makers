<?php
session_start();
?>



<?php




$naam = $_POST["naam"];
$wachtwoord = $_POST["wachtwoord"];


$host = "localhost";
$user = "ayachi2003"; 
$pass = "";     
$db = "login";
$port = 3306;

$connection = mysqli_connect($host, $user, $pass, $db, $port);


$query = "select * from users  username = '$naam' and wachtwoord = '$wachtwoord' ";

$result = mysqli_query($connection,$query);


//$naam = stripcslashes($naam);
//$wachtwoord = stripcslashes($wachtwoord);
//$naam = mysqli_real_escape_string($connection,$naam);
//$wachtwoord = mysqli_real_escape_string($connection,$wachtwoord);





if (!empty($naam) or !empty($wachtwoord)) {
  if ($row['username'] == $naam || $row['wachtwoord'] == $wachtwoord) {
      header("Location: /public/");
} 

}


mysqli_close($connection);


?>


<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="index.css" type="text/css" />
		<script type="text/javascript" src="index.js"></script>
	</head>
	<body>
    <div class="login-page">
      <div class="form">
        <form class="login-form" method="post">
          <input type="text" placeholder="gebruiksnaam" name="naam"/>
          <input type="password" placeholder="wachtwoord" name="wachtwoord"/>
          <input onclick="window.open('/public/index.php')" type="submit" name="knop"/>
          <p class="message">Niet geregisteerd? <a href="/register/index.php">Create an account</a></p>
        </form>
      </div>
    </div>

	</body>
</html>

