<?php include('server.php');  ?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<body>
	
	<div class="loginbox">
	<img src="avatar.png" class="avatar">
	    <h1>Login Here</h1>
	    <form method="post" action="login.php">
	    	<?php include('errors.php'); ?>
	    	<p>Username</p>
	    	<input type="text" name="username" placeholder="Enter Username" value="<?php echo $username; ?>">
	    	<p>Password</p>
	    	<input type="password" name="password" placeholder="Enter Password">
	    	<input type="submit" name="login" value="Login">
	    	<a href="#">Lost your password?</a><br>
	    	<a href="account.php">Don't have an account?</a>
	    </form>

	</div>
</body>
</head>
</html>
