<?php 	include_once('server.php');?>
<?php include('errors.php'); ?>
<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="refresh" content="30">
  <meta charset= "UTF-8">
  <meta http-quiv= "X-Compatible" content= "IE=edge">
  <title>Login Page</title>
  <link rel="stylesheet"  type="text/css" href="style.css"></link>

</head>
  <body>

 <?php
if (isset($_POST['username']))
{
  $username = htmlspecialchars($username);
}
if (isset($_POST['password']))
  $password = htmlspecialchars($password);
?>

  <form method="post" action="login.php">

 <fieldset>
       <div class="container1">
       <form action= "login.php" method= "post" accept-charset="utf8">
         <h1>Member Login </h1>
         <p> Thanks for visiting! Either login below or <a href="register.php">Register here</a>
        <div id="form-input-username">
          <label>Username</label>
        <input type="text" name="username"

         required>
         </div>

         <div id="form-input-password">
           <label>Password</label>
         <input type="password"
         name="password"
         required>
         </div>
        <input type="submit" name="login_user"
        value="LOGIN" class="btn-login">
      </fieldset>
  </form>
</div>

  	<form method="post" action="login.php">


</body>
</html>
