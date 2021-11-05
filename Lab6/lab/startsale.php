<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start sales</title>
</head>
<body>
    <h1 style = "color: blue"> Select Product We Just Sold: </h1>
    <?php
         include 'connect.php';
         if($connect->error){
             echo 'Cannot reach the sever ' . die($connect->error);
         }
         else{
            $sql = "SELECT * FROM products";
            $table = $connect->query($sql);
            $table2 = $connect->query($sql);
         if($table->num_rows > 0){
             echo '<form action="sale.php" method = "post">';
             while($row = $table->fetch_assoc()){
                 echo $row["product_desc"];
                 echo '<input type = "radio" name = "myradio" value = '.$row["product_desc"] .'>';
             }
             echo '<input type = "submit" value = "Submit">';
             echo '</form>';
             echo 'The Query is ' . $sql;
             echo '<table><tr><th>Num</th><th>Product</th><th>Cost</th><th>Weight</th><th>Count</th></tr>';
             while($row = $table2->fetch_assoc()){
                 echo '<tr><td>' .$row["product_id"].'</td><td>' .$row["product_desc"]."</td><td>" .$row["cost"].'</td><td>'.$row["weight"].'</td><td>'
                 .$row["numb"].'</td></tr>';
             }
             echo '</table>';
             $connect->close();
         }
         else{
             echo 'Select table error' . $connect->error;
         }
        }
    ?>
</body>
</html>