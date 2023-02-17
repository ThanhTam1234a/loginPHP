<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai5</title>
</head>
<body>
    <form  method="post" action="">
    <label for="">Nhập số :</label> 
    <input type="number" name="number">
    <input type="submit" value="Tính tổng " name="btn">
    </form>
    <?php
if (isset($_POST["btn"])){
    $n =  $_POST["number"];
    $s = 0;
    while($n!=0){
        $s += $n % 10;
        $n = $n / 10;  
    }
    echo$s;
}
?>
</body>
</html>