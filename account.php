<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create an account</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="accbox">
	<img src="avatar.png" class="avatar">
	    <h1>Create An Account Here</h1>
	    <form method="post" action="account.php">
	    	<?php include('errors.php'); ?>
	    	<p>Username</p>
	    	<input type="text" name="username" placeholder="Enter Username" value="<?php echo $username; ?>">
	    	<p>Email</p>
	    	<input type="Email" name="email" placeholder="Enter Email" value="<?php echo $email ?>">
	    	<p>Password</p>
	    	<input type="Password" name="password_1" placeholder="Enter Password" >
	    	<p>Confirm Password</p>
	    	<input type="Password" name="password_2" placeholder="Enter Password" >
	    	<input type="submit" name="register" value="Create An Account"> 
            <!--<button type="submit" name="register" classname="customButton">Create An Account</button>-->
	    	<a href="#">Lost your password?</a><br>
	    	<a href="login.php">Already have an account?</a>
	    	
	    </form>
	</div>
</body>
</html>