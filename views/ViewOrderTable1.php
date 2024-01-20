<?php
    $document_root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joe's Autopart - Order Report</title>
    <link rel="stylesheet" href="../css/style3.css">
</head>
<body>
    <div class="container">
        <h2>Joe's Autopart</h2>
        <h2>Customer Order</h2>
        <div class="table">
            <div>Order Date</div>
            <div>Tire</div>
            <div>Oil</div>
            <div>Spark Plugs</div>
            <div>Total</div>
            <div>Address</div>
     
        <?php
        $orders = file("$document_root/order/views/orders_with_line_no.txt");
        $ordersCount = count($orders);
        if($ordersCount == 0){
            echo "<p><strong>No orders pending. <br/>
                 Please try agina later.</strong></p>";
        }
        for($p=0;$p<$ordersCount;$p++){

            $columns = explode("\t", $orders[$p]);
          echo "<div>".$columns[0]."</div>";
          echo "<div>". ($columns[1])."</div>";
          echo "<div>".$columns[2]."</div>";
          echo "<div>".$columns[3]."</div>";
          echo "<div>".$columns[4]."</div>";
          echo "<div>".$columns[5]."</div>";
            // "<div >";
            
            // echo $columns[1].
            
            
            // "</div>";
            // "<div >";
            
            // echo $columns[2].
          
            
            // "</div>";
            // "<div >";
            
            // echo $columns[3].
            
            
            // "</div>";
        }

        ?>
         </div>
    </div>
</body>
</html>