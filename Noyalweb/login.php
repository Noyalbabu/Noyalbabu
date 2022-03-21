 <?php
require ('includes/conn.inc.php');
ini_set('display_errors', 1);
include ('includes/sessions.inc.php');

?> 

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" media="only screen and (min-width : 600px)" href="css/desktopNew.css">
<link rel="stylesheet" media="only screen and (min-width : 600px)" href="css/desktopformnew.css">
<title>Login</title>
</head>

<body>
<div class="container">
	<header>
	<div class="headcontainer">

		<nav>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="basket.php">Basket</a></li>
		</ul>
	</nav>
	</div>
	</header>

		<div class="banner">
			<h2>Login</h2>
		
		</div>
			<div class="main">
			<div class="loginAnimation">
						<div id="loginbutton" class="modal">
						
							<div class="imgcontainer">
								<span onclick="document.getElementById('loginbutton').style.display='none'" class="close" title="Close Modal">&times;</span>
								<img src="images/login.png">
							</div>
								<?php 
										include('includes/session-login.inc.php');	
									?>  
						</div>
					</div>	
					<div class="loginAnimation">
						<div id="signInbutton" class="modal">
						
							<div class="imgcontainer">
								<span onclick="document.getElementById('signInbutton').style.display='none'" class="close" title="Close Modal">&times;</span>
								<img src="images/login.png">
							</div>
								<?php 

										include('includes/session-signup.inc.php');
	
									?>
						</div>
					</div>
					<div class="loginbutton">
						<button onclick="document.getElementById('loginbutton').style.display='block'">Login</button>
					</div>
					<div class="loginbutton">
						<button onclick="document.getElementById('signInbutton').style.display='block'">Sign In</button>
					</div>
			</div>
		<footer>
			<p>&copy; Copyright 2022 Noyal Babu</p>
		</footer>
	</div>	
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/main.js"></script>
<script>

var modal = document.getElementById('loginbutton','signInbutton');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
