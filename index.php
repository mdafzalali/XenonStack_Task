<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login and signup</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="xenon">XenonStack Task</div>
	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<img src="image.jpeg" width="100%">
				</div>
				<div class="col-2">
					<h3>
						Login with College Uid...
					</h3>
					<div class="form-container">
					<form action="index.php" method="POST">
						<label for="UserID">User ID</label>
						<input type="text">
						<br>
						<label for="Password">Password</label>
						<input type="password">
						<div class="account-exist">
							Create New Account?
                		    <a href="signup.php">Signup</a>
                		</div>
						<div class="forget-password">
							<div class="check-box">
								<input type="checkbox" id="checkbox">
								<label for="checkbox">Remember me</label>
							</div>
							<a href="#">Forget password? </a>
						</div>
						<button type="submit" class="btn" action="home.php">Login</button>
					</form>
				</div>
			</div>
			</div>
		</div>
	</div>
				
</body>
</html>