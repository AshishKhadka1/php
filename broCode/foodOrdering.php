<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./foodOrdering.php" method="post">
        <label for="">Item: </label>
        <input type="text" name="item" id=""><br><br>
        <label for="">Quantity: </label>
        <input type="text" name="quantity" id=""><br><br>
        <input type="submit" value="Total"><br><br>
    </form>
</body>
</html>

<?php
    $item = $_POST["item"];
    $price = "10";
    $quantity = $_POST["quantity"];
    $total = null;
    $total = $quantity * $price;

    echo" You have ordered {$quantity} {$item}s. <br>";
    echo"Your total amount for {$item}s is: {$total}$";
?>