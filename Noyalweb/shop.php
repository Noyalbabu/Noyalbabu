<?php 
require('includes/conn.inc.php'); 
$sql = "SELECT * FROM womanCloths";
$stmt = $pdo->query($sql);
$totalnoCloths = $stmt->rowCount();

$sqlMen = "SELECT * FROM  mensCloths";
$stmtMen = $pdo->query($sqlMen);
$totalnoMensCloths = $stmtMen->rowCount();


?>

<!doctype html>
<html>
<title>Shop</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/desktop.css">
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

		<div class="divider">Woman</div>
		
            <div class="content">


                <?php
					
									while($row = $stmt->fetchObject()){
							echo "<div class=\"grid\">";
							echo "<div><img src=\"images/{$row->clothsImages}\"></div>";
							echo "<div class=\"imageName\">{$row->clothsName}</div>";
							echo "</div>";
						}
                        // array
									?>
                                
            </div>
			<div class="divider">Mens</div>

            <div class="content">

                <?php
					
					while($row = $stmtMen->fetchObject()){
			echo "<div class=\"grid\">";
			echo "<div><img src=\"images/{$row->clothsImages}\"></div>";
			echo "<div class=\"imageName\">{$row->clothsName}</div>";
			echo "</div>";
		}
					?>


            </div>
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