<?php include('server.php');  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!--<img src="liga1logo.png" class="liga1logo" href="liga1.php">-->
	<div class="content">
		<?php if(isset($_SESSION['success'])):  ?>
			<div class="error success">
				<h3>
				 <?php echo $_SESSION['success']; 
				 unset($_SESSION['success']);
				  ?>	
				</h3>
			</div>
		<?php endif  ?>
		<?php if (isset($_SESSION["username"])):?> 
			<p>Welcome <strong><?php echo $_SESSION['username']  ?></strong></p>
			<!--<p><a href="" style="color: red;">Logout</a></p>-->
		<?php endif  ?>			 	
	</div>
<nav>
	<section class="nav-container">
		<aside class="home">
			<div class="homebutton">
				<a href="index.php">Acasa</a>
			</div>
		</aside>		
		<aside class="loginhome"> 
            <div class="loginhome-content">
            	<a href="login.php">Login</a> | <a href="account.php">Register</a></aside>
            </div>
			
	</section>
</nav>
    
	<div class="sidebar">
		<header>Competitii</header>
		<ul>			
		  <li><a href="liga1.php">liga 1</a></li>
		  <li><a href="liga2.php">liga 2</a></li>
		  <li><a href="liga3.php">liga 3</a></li>
		</ul>
	</div>	
	<div class="liga1logo">
		<a href="liga1.php"><img class="liga1photo" src="liga1logo.png" ></a>
	</div>	
	<div class="cfr">
		<a href="liga1.php"><img class="cfrphoto" src="cfr.jfif" ></a>
	</div>		
</body>
</html>