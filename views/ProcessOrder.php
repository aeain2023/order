<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/orderprocess.css">
    <title>Bob's Auto Parts - Order Results</title>
    
</head>
<body>
    <div class="container">
        <h1>Bob's Auto Parts</h1>
        <h2>Order Results</h2>
    </div>
    <div class="result">
        <?php
         echo  "<p>Order Process At: </p>";
         echo  "<span class='date'>Time: </span>";
         echo date('H:i j F Y'). "<span><br/></br>"; 
       
        //  $tires = 0;
        //  $oil =0;
        //  $spark =0;  
        //  if(isset($_POST['txtTires']) && !empty($_POST['txtTires'])){
        //     $tires = $_POST['txtTires'];
        //  }
        //  if((isset($_POST['txtOil'])) && !empty(($_POST['txtOil']))){
        //     $oil = $_POST['txtOil'];
        //  }
        //  if((isset($_POST['txtSpark'])) && !empty(($_POST['txtSpark']))){
        //     $spark = $_POST['txtSpark'];
        //  }
        // $tires=  (isset($_POST['txtTires']) && !empty($_POST['txtTires']))?$_POST['txtTires']:0;
        // $oil=  (isset($_POST['txtOil']) && !empty($_POST['txtOil']))?$_POST['txtOil']:0;
        // $spark = (isset($_POST['txtSpark'])&& !empty($_POST['txtSpark']))?$_POST['txtSpark']:0;
        include '../OrderItemFun.php';
        $tires  =   dataPass('txtTires'); // data pass and check validation for warning case
        $oil    =   dataPass('txtOil');
        $spark  =   dataPass('txtSpark');
        $address = dataPass('txtAddress');
        $date = date('H:i, j F Y');
        $totalQty =0;
        $totalQty = $tires + $oil + $spark;

        echo "<p class= 'small-heading'>item ordered: </p>";
        echo "<span class='number'> ". $totalQty ."</span></br>";

        if($totalQty ==0){
            echo "<p class='error'>";
            echo "You did not order anything on the previous page!";
            echo "</p>";
            exit;
        }
        else{
            echo '<p>your order is as follows:</p>';
            echo '<p>';
            if($tires >0)
                echo htmlspecialchars($tires). ' tires</br>';
            if($oil >0)
                echo htmlspecialchars($oil). ' bottles of oil</br>';
            if($spark >0)
                echo htmlspecialchars($spark). ' spark plugs</br>';
                echo "<p>Address to ship is :". htmlspecialchars($address) . "</p>";
               
        
            
            echo '</p></br>';
        
        }
            
        $totalQty =0.0;

        const TIRE_PRICE = 100;
        const OIL_PRICE = 10;
        const SPARK_PRICE =4;

        $totalAmt = $tires * TIRE_PRICE
                + $oil * OIL_PRICE 
                + $spark * SPARK_PRICE;
        echo "Subtotal: ";
        echo "<span class='number'> $". number_format($totalAmt, 2). "</span></br>";

        $txtRate = 0.10; //local sales tax is 10%
        $totalAmt = $totalAmt * (1+ $txtRate);
     
        $outputString = $date. "\t". $tires . "tires, \t"
        . $oil . "oil, \t"
        . $spark . "spark plugs, \t"
        . $totalAmt . ",\t" . $address . "\n";

        $document_root = $_SERVER['DOCUMENT_ROOT'];
        $fileName = "$document_root/order/views/orders_with_line_no.txt";
        if(file_exists($fileName)) {
        $f = fopen(($fileName), 'ab');
        @flock($f, LOCK_EX);
        fwrite($f, $outputString, strlen($outputString));
        flock($f, LOCK_UN);
        fclose($f);
}
        ?>
    </div>
</body>
</html>

