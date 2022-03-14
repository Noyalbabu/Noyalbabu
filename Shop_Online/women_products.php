<?php 
    session_start();
    $conn = mysqli_connect("localhost","root","root","Shopping_cart");
    $sql = "SELECT * FROM items where id= 1";
    $result = mysqli_query($conn,$sql); 
?>
<DOCTYPE html>
<head>
    <title>Womens Wear</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class = "women">
        <h1>Latest Arrival</h1>
        <p>All our products are of high quality. Various check are made to ensure that the products dispached from our units are in good condition and no damages are done. As part of company policies no garnments will refunded.
        </p>
    <?php
    if (mysqli_num_rows($result)>0){ 
        
        while($row = mysqli_fetch_assoc($result))
        {   echo'<br>' ;
            echo $row["item_id"];
            echo '<br>';echo $row["name"] ;
            echo '<br>';echo $row["decrpt"];
            echo '<br>';echo $row["price"];
            echo '
            <tr>
                <td>
                  <img src="data:image/jpg;base64,'.base64_encode($row['productImage']).'" width = "100px" height = "100px"/>
                </td>
           </tr><br>';
           echo '
           <div class = women_quantity_button>
           <label for = "quantity">Quantity</label>
           <input type = "number" name = "quantity" id = "quantity" min="1"/>
       </div>
           <div class = women_add_button>
            <input type = "submit" name = "add_items" id = "add_items" onclick="" value = "ADD TO BASKET"/>
        </div>
        <div class = women_remove_button>
            <input type = "submit" name = "remove_items" id = "remove_items" onclick="" value = "REMOVE FROM BASKET"/>
        </div>
    
         ';
        }    }
   
    ?>
    
    </div>
</body>  
</table>
</div>
</html>