<?php


session_start();

?>


<?php

$naam = $_POST['naam'];
$wachtwoord = $_POST['wachtwoord'];

$_SESSION['naam'] = $naam;
$_SESSION['wachtwoord'] = $wachtwoord;


$host = "localhost";
$user = "ayachi2003";
$pass = "";
$db = "login";
$port = 3306;

$connection = mysqli_connect($host, $user, $pass, $db, $port);

$query = "select * from users where username = '$naam' and wachtwoord = '$wachtwoord' ";


$result = mysqli_query($connection,$query);

$row = mysqli_fetch_array($result);


if ($row['username'] == $naam && $row['wachtwoord'] == $wachtwoord) {
     header('Location: /public/index.php');
} else {
    echo "login gegevens verkeert";
}


mysqli_close($connection);



?>