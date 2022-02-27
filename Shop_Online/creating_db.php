<?php
   $conn = mysqli_connect("localhost","root","root");

   $sql = "CREATE DATABASE IF NOT EXISTS Shopping_cart";

   if (mysqli_query($conn,$sql)){ echo "Shopping_cart database created";}
   else die(mysqli_error($conn));
   
   $sql = "USE shopping_cart";
   if (mysqli_query($conn, $sql)) echo "<p>Shopping cart database selected.</p>";
	else die(mysqli_error($conn));

   $sql = "CREATE TABLE IF NOT EXISTS user_details 
          ( user_id INT AUTO_INCREMENT PRIMARY KEY, 
          username VARCHAR (50) NOT NULL,
         user_address VARCHAR(255) NOT NULL )";
   if (mysqli_query($conn,$sql)){ echo "user_details table created";}
   else die(mysqli_error($conn));
   

   mysqli_close($conn);
?>














































































































