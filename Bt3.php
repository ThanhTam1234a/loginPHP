<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai3</title>
</head>
<body>
<form method="post">
  <label for="fname">Nhập số đầu :</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Nhập số cuối:</label><br>
  <input type="text" id="lname" name="lname"><br>
  <br>
  <button type="submit" name="btn">Click Me!</button>
</form>
<div>
<p>Các số chia hết cho 3 là :</p>
<?php
if (isset($_POST["btn"])){
    $a =  $_POST["fname"];
    $b =  $_POST["lname"];
    if($a>$b){
        $max=$a;
        $min=$b;
    }
    else {
        $max=$b;
        $min=$a;
    }
    for($i=$min;$i<=$max;$i++){
        if($i%3==0){
         echo$i." ";
        }     
    }
}
?>
</div>

</body>
</html>