<?php
    $document_root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joe's Autopart - Order Report</title>
</head>
<body>
    <div class="container">
        <h2>Joe's Autopart</h2>
        <h2>Customer Order</h2>
        <form action="">
            
        </form>
        <?php
        $orders = file("$document_root/order/views/orders_with_line_no.txt");
        $ordersCount = count($orders);
        if($ordersCount == 0){
            echo "<p><strong>No orders pending. <br/>
                 Please try agina later.</strong></p>";
        }
        for($p=0;$p<$ordersCount;$p++){
            echo $orders[$p] ."<br/>";
        }

        ?>
        
        <!-- //<?php 
        // $fileName = "$document_root/order/views/orders_with_line_no.txt";
        //     if(file_exists($fileName)) {
        //         @$f = fopen($fileName, 'r');
        //         if($f) {
        //             while (!feof($f)) {
        //                 $order = fgets($f);
        //                 echo htmlspecialchars($order) . "<hr/>";
        //             }
        //         }
        //     }
        ?> -->
    </div>
</body>
</html>