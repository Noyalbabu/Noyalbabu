 <?php
require ('includes/conn.inc.php');
include ('includes/sessions.inc.php');
ini_set('display_errors', 1);


$sql = "SELECT * FROM womanCloths";
$stmt = $pdo->query($sql);
$totalnoCloths = $stmt->rowCount();

?> 

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" media="only screen and (min-width : 600px)" href="css/desktop.css">
<title>	Basket</title>
</head>

<body>
<div class="container">
	<header>
	<div class="headcontainer">
		<nav>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="shop.php">Shop</a></li>
		</ul>
	</nav>
	</div>
	</header>

		<div class="banner">
			<h2>Basket</h2>
		
		</div>
		<div class="content">

			<?php

    if(isset($_SESSION['login'])){

							while($row = $stmt->fetchObject()){
					echo "<div class=\"grid\">";
					echo "<div><img src=\"images/{$row->clothsImages}\"></div>";
					echo "<div class=\"imageName\">{$row->clothsName}</div>";
					echo "</div>";
				}
				//logout
				// remove 			
		
    }
	else{
		echo "<div class=\"imageName\">Please Login   </div>";
		echo "<a href=\"login.php\">Login</a>";
	}
?>
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
