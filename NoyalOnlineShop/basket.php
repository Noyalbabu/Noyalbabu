 <?php
require ('includes/conn.inc.php');
include ('includes/sessions.inc.php');

ini_set('display_errors', 1);


$sql = "SELECT * FROM cloths ";
$stmt = $pdo->query($sql);

if (isset($_POST['remove'])){
	foreach ($_SESSION['basket'] as $key=>$value){
	if ($value["productId"] == $_POST['purchasedId']){
		unset($_SESSION['basket'][$key]);
		unset($_SESSION['Quantity'][$key]);
		echo "<script> alert ('This item has been removed....')</script>";
		print_r($_SESSION['basket']);
		print_r($_SESSION['Quantity']);
		echo "<script> window.location = 'basket.php'</script>";
	}
 }
}

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
		
		<div class="shopContent">

			<?php

    if(isset($_SESSION['login'])){
		
		echo "<div class=\"logoutDiv\">";
		echo "<button class = \"logoutButton\"><a href=\"logic/logout.php\">Logout</a></button>";
		echo "</div>";
		

					if ((isset($_SESSION['basket'])) && isset($_SESSION['Quantity'])){
						extract($_POST);
						
						$total = 0;
						$productId = array_column($_SESSION['basket'],'productId')  ;
						$quantity = array_column($_SESSION['Quantity'],'number');

						while($row = $stmt->fetchObject()){
								foreach (array_combine($productId,$quantity) as $purchasedId => $number) {	
									if ($purchasedId == $row->clothsId){
										echo "<form method = 'post' >";
										echo "<div class=\"grid\">";
										echo "<div><img src=\"images/{$row->clothsImages}\"></div>";
										echo "<div class=\"imageName\">Product Name: <b>{$row->clothsName}</b></div>";
										echo "<div class =\"imageName\">Product Price:<b> {$row ->clothPrice}</b></div>";
										echo "<div class = \"iamgeName\">Quantity Pruchased:<b> $number</b></div>";
										echo "
										<input type = 'submit' name = 'remove' value = 'Remove from basket'/>
										<input type = 'hidden' name = 'purchasedId' value = '$row->clothsId'/>";
                                        $total = $total + ((double) $row->clothPrice * (double)$number);
										echo "</div> </form>";
   							        }														
								}
								
					       
						}

						echo "<div class=\"checkout\">";
						echo "<button class = \"checkoutButton\"><a href=\"checkout.html\">Checkout</a></button>";
						echo "<div>
						Total Price = $total;
						</div>";
						echo "</div>";
					
					}
					else{
						echo "<p class=\"basketMessage\">Nothing in the Basket</p>";
					}
				}
				
						
	else{
		echo "<div class=\"login-grid\">";
		echo "<div class=\"imageName\">Please Login / Sign Up</div>";
		echo "<button class = \"checkoutButton\"><a href=\"login.php\">Login</a></button>";
		echo "</div>";
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
