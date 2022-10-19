<?php
$insert = false;
if(isset($_POST['userid'])){
	$serverName = "localhost";
	$username = "root";
	$password ="";
	$dbName = "test";

	// $conn = mysqli_connect($serverName, $userName, $password, $dbName);

	
	$con = mysqli_connect($serverName, $username, $password, $dbName);

	if(!$con){
		die("connection to this database failed due to".mysqli_connect_error());
	}
	// echo "Success connecting to the db";

	$email = $_POST['email'];
	$userid = $_POST['userid'];
	$password = $_POST['password'];
	$sql = "INSERT INTO `task` (`email`, `userid`, `password`, `date`) VALUES ('$email', '$userid', '$password', current_timestamp());";

	if($con->query($sql) == true){
		// echo "Successfully inserted";
		$insert = true;
	}
	else{
		echo "ERROR: $sql <br> $con->error";
	}

	$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
	<title>login and signup</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<img src="image.jpeg" width="100%">
				</div>
				<div class="col-2">
					<h3>
						Create your account.....
					</h3>
					<div class="form-container">
					<?php
    				    if($insert == true){
    				    echo "<p class='submitMsg'>Now you can login!!";
    				    }
    				?>
					<form action="signup.php" method="POST">
						<label for="email">Email Id</label>
						<input type="email" name="email" id="email" >
						<br>
						<label for="userid">User ID</label>
						<input type="text" name="userid" id="userid" >
						<br>
						<label for="password">Password</label>
						<input type="password" name="password" id="password" >
						<br>
						<div class="account-exist">
							Already have an account? <a href="index.php">Login</a>
						</div>
						<button type="submit" class="btn">Sign Up</button>
						
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
				
</body>
</html>