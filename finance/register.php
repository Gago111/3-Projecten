<?php 	include_once('server.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration </title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		   <div class="container1">
		  		<div class="input-group">
						<h1> Register </h1>
		  			<label>Username</label>
		  			<input type="text" name="username" required size="20" value="<?php echo $username; ?>">
		  		</div>
		  		<div class="input-group">
		  			<label>Email</label>
		  			<input type="email"  required name="email" value="<?php echo $email; ?>">
		  		</div>
		  		<div class="input-group">
		  			<label>Password</label>
		  			<input type="password" name="password_1">
		  		</div>
		  		<div class="input-group">
		  			<label>Confirm password</label>
		  			<input type="password"  name="password_2" required>
		  		</div>
            <div class="btn-login">
		  			<button type="submit"   name="reg_user">Register</button required>
		  		</div>
					<p> Already a member? <a href="login.php">Login Here</a>

	</form>
</body>
</html>
