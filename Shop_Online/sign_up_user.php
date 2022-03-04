<?php
    $success = false;
	$conn = mysqli_connect("localhost", "root", "root", "shopping_cart");
    if (!$conn){
		echo  "<p>Failed to connect to the TK Groups database</p>";
	}
	else{

// enter the details of the user to a table
		$username = $_POST["username"];
		$address = $_POST["address"];
        $success = true;
	}



?>
<html>
   <head>
<title> Tk Groups </title>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body >
<div class = "container">
	<div class = "main">
	  <div class = "navigation-box">
		<div class = "icon">
			<i class = "fa fa-search" aria-hidden = "true">Category</i>
        </div>
		<div class= "content">
			<a href = "">Women</a><br>
			<a href = "">Mens</a><br>
			<a href = "">Kids</a><br>
			<a href = "">Home accessories</a><br>
        </div>
       </div>

	  <div class = "footer">
		<?php
		if ($success) echo "<p><b>Welcome $username ! Hope you enjoy shopping with us.</b></p>";
		?>
        </div>
    </div>
</div> 
<body>
</head>
</html>
