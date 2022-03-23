<?php 

require('includes/conn.inc.php'); 
require_once('includes/sessions.inc.php');

$sql = "SELECT * FROM cloths";
$stmt = $pdo->query($sql);
$totalnoCloths = $stmt->rowCount(); 


if (isset($_POST["add"])){
 // session arrays to hold the productid and number of items per product       
    if ((isset($_SESSION['basket'])) && isset($_SESSION['Quantity'])){

        $item_in_array = array_column($_SESSION['basket'],'productId');
        if (in_array($_POST['clothsId'],$item_in_array)){
            echo "<script> alert ('You have already added this item to your cart....')</script>";
            echo "<script> window.location = 'shop.php'</script>";
        }else{
        $count_b = count($_SESSION['basket']); //returns number of elements in the array 
        $item_array = array(
            'productId' => $_POST["clothsId"]
            );    
        $count_q = count($_SESSION['Quantity']); //returns number of elements in the array 
        $quantity_array = array(
            'number' => $_POST["quantity"]
            );    
        $_SESSION['Quantity'][$count_q] = $quantity_array; 
        $_SESSION['basket'][$count_b] = $item_array; 
        print_r($_SESSION['Quantity']);
        print_r($_SESSION['basket']);
        
        }

}

    else{
    $item_array = array(
        'productId' => $_POST["clothsId"]
    );
    $quantity_array = array(
        'number'=> $_POST['quantity']
    );
    $_SESSION['Quantity'][0] = $quantity_array;
    $_SESSION['basket'][0] = $item_array;

    // print_r($_SESSION['quantity']);
    // print_r($_SESSION['basket']);
    }
}




?>


<!doctype html>
<html>
<title>Shop</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/desktopNew.css">
</head>

<body>

    <div class="container">
        <header>
            <div class="headcontainer">
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="basket.php">Basket</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="banner">
            <h2>Shop</h2>
        </div>
        <div class="items">

		<div class="divider">New Arrivals</div>
		
            <div class="shopContent">


                        <?php
					
						    while($row = $stmt->fetchObject()){
                            echo "<form method = 'post' >";
							echo "<div class=\"grid\">";
							echo "<div><img src=\"images/{$row->clothsImages}\"></div>";
							echo "<div class=\"imageName\">{$row->clothsName}</div>";
                            echo "<div class=\"imageName\">{$row->clothPrice}</div>";
                            echo "<div class=\"imageNameDet\">{$row->details}</div>";
                            echo"<input type = 'number' name = 'quantity' min = '1' placeholder = 'Enter the quantity'/>
                            <input type ='submit' name = 'add' value ='Add to basket'/>
                            <input type = 'hidden' name ='clothsId'  value = '$row->clothsId'/>";
                            
                            
							echo "</div>";
                            echo"</form>";
						   } 
                           ?>
                     
					
                                
            </div>
        <footer>
            <p>&copy; Copyright 2017</p>
        </footer>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/listing2.js"></script>
</body>

</html>