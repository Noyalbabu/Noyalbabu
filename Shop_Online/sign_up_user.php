<?php
	$conn = mysqli_connect("localhost", "root", "root", "shopping_cart");


// enter the details of the user to a table
		$username = $_POST["username"];
		$address = $_POST["address"];
        $success = false;

		$sql = "INSERT INTO user_details (username, user_address)
				VALUES('$username', '$address')";

		if (mysqli_query($conn, $sql)) $success = true;

?>
<html>
   <head>
<title> Tk Groups </title>
<body >
    <?php
    if ($success) echo "Welcome $username ! Hope you enjoy shopping with us.";
    ?>
   
<body>
</head>
</html>
