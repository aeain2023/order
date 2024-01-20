<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freight</title>
    <link rel="stylesheet" href="../css/style1.css">
</head>
<body>
   
    <table id="distance" style="width:100%;">
        <tr>
            <th>Distance</th>
            <th>Km</th>
            <th>Cost</th>
            <th>$</th>
        </tr>
        <script>
           var distances = [50,100,150, 200];
           
            for (var x=0; x < distances.length; x++){
                if (x%2==0){
                   document.write("<tr>");
                } else {
                    document.write("<tr class='stripe'>");
                }
                 document.write("<td>"+distances[x]+"</td>");
           
                 document.write("<td class='amt'>"+distances[x]*0.1+"</td>");
                 document.write("</tr>");
            }
   
        </script>
    </table>
  
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Distance</title>
    <link rel="stylesheet" href="../css/style1.css">

</head>

<body>
    <div class="container">
        <div class="header">
            <div>
                <h2>Distance</h2>
                
                <h2>Km</h2>
            </div>
            <div>
                <h2>Cost</h2>
                <h2>$</h2>
            </div>
            <?php
            $distances = [50,100,150, 200];
            $totalDistance = count($distances);
            for($i =0;$i<$totalDistance; $i++){
                $cost = $distances[$i]*0.1;
                echo "<h3>$distances[$i]</h3>";
                echo "<h3>$cost</h3>";
            

            }
            ?>
        </div>
    </div>
</body>

</html>