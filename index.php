<?php

session_start();

?>


<?php

//Registreren
$username = $_POST['username'];
$password = $_POST['password'];


//inloggen
$naam = $_POST['naam'];
$wachtwoord = $_POST['wachtwoord'];

if (empty($naam)) {
	echo "<script>alert('yay')</script>";
} else {

$_SESSION['naam'] = $naam;
$_SESSION['wachtwoord'] = $wachtwoord;

$host = "localhost";
$user = "ayachi2003";
$pass = "";
$db = "login";
$port = 3306;

$connection = mysqli_connect($host, $user, $pass, $db, $port);

$sql = "INSERT INTO users(username,wachtwoord) VALUES('$username','$password')";
$query2 = "select * from users where username = '$naam' and wachtwoord = '$wachtwoord'";

$result = mysqli_query($connection,$sql);
$resultaat = mysqli_query($connection,$query2);


$row = mysqli_fetch_array($resultaat);



if ($row['username'] == $naam && $row['wachtwoord'] == $wachtwoord) {
    header('Location: /public/');
} else {
		echo "<script>alert('login gegevens verkeerd')</script>";
}

mysqli_close($connection);

}



?>


<!DOCTYPE html>
<html>
    
    <head>
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/index.css" type="text/css" />
    <script type="text/javascript" src="index.js"></script>
        
        
    </head>
    
    
    <body style="background-color: white">
        
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="naam" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="wachtwoord" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    

        
        
    </body>
    
    
</html>
