<?php
    $document_root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joe's Autopart - Order Report</title>
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body>
    <div >
        <h2>Joe's Autopart</h2>
        <h2>Customer Order Table</h2>
        <div class="container">
        <div class="header">

            <div class="header1">
              <h3>Order Date</h3> 
           
       
            </div>
            <div class="header1">
            <h3>Tires</h3> 
       
                
            </div>
            <div class="header1">
               
               <h3>Oil</h3> 
           </div>
            <div class="header1">
               
                <h3>Spark Plugs</h3> 
            </div>
            <div class="header1">
                
            <h3>Total</h3> 
            </div>
            <div class="header1">
                
            <h3>Address</h3> 
            </div>

            <?php
        $orders = file("$document_root/order/views/orders_with_line_no.txt");
        $ordersCount = count($orders);
        if($ordersCount == 0){
            echo "<p><strong>No orders pending. <br/>
                 Please try agina later.</strong></p>";
        }
        for($p=0;$p<$ordersCount;$p++){
            $columns = explode("\t", $orders[$p]);
            "<div>";
            
            echo "<h3>".$columns[0].
            "</h3>";
            
            "</div>";
            "<div >";
            
            echo "<h3>".$columns[1].
            "</h3>";
            
            "</div>";
            "<div >";
            
            echo "<h3>".$columns[2].
            "</h3>";
            
            "</div>";
            "<div >";
            
            echo "<h3>".$columns[3].
            "</h3>";
            
            "</div>";
            
        }

        ?>
        </div>
       
        
     
    </div>
</body>
</html>