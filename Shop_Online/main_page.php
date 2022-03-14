<?php
 include("main_function.php");
 
 if ($success){
     
         extract($_POST);
         $userpassword = md5($userpassword);
         $sql = "INSERT INTO user_details(username, password) VALUES ('$username', '$userpassword')";

         if (mysqli_query($conn, $sql)) echo "You have become one of our valuable customer, Welcome to TK GROUPS.<br>";
         else echo "Sorry cannot connect to TK Groups database <br>".mysqli_error($conn);
 
 }
?> 

<html>
   <head>
<title> Tk Groups </title>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body >

<div class = "container">
	<h1> Welcome to TK Groups online shopping </h1>
	<div class = "main">
		<nav>
		<a href = "index.php"><i class = "fa fa-home " aria-hidden = "true">Home</i></a>
        </nav>
	  <div class = "navigation-box">
		<div class = "icon">
			<i class = "fa fa-search" aria-hidden = "true">Category</i>
        </div>
		<div class= "content">
			<a href = "http://localhost/Shop_Online/women_products.php">Women</a><br>
			<a href = "http://localhost/Shop_Online/mens_products.php">Mens</a><br>
			<a href = "http://localhost/Shop_Online/kids_products.php">Kids</a><br>
			<a href = "http://localhost/Shop_Online/home_products.php">Home accessories</a><br>
        </div>
       </div>
</div> 
<body>
</head>
</html>
<?php 
	include("footer.php");
	?>
    
