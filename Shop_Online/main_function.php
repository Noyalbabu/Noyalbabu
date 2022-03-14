<?php
    
    $success = false;
	$conn = mysqli_connect("localhost", "root", "root", "shopping_cart");
    if (!$conn){
		echo  "<p>Failed to connect to the TK Groups database</p>";
	}
	else{
		$username = $_POST["username"];
		$userpassword = $_POST["userpassword"];
		echo "$username";
        $success = true;
		
	}
?>