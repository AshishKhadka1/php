<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./checkBoxes.php" method="POST">
        <input type="checkbox" name="pizza" value="PIZZA">Pizza <br>
        <input type="checkbox" name="hotdog" value="HOTDOG">Hot Dog <br>
        <input type="checkbox" name="burger" value="BURGER">Birger <br>

        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>

<?php
    if(isset($_POST["submit"])){
        if(isset($_POST["pizza"])){
            echo"you selected pizza <br>";
        }
        if(empty($_POST["pizza"])){
            echo"you did not selected pizza <br>";
        }
        if(isset($_POST["hotdog"])){
            echo"you selected hotdog <br>";
        }
        if(empty($_POST["hotdog"])){
            echo"you did not selected hotdog <br>";
        }
          if(isset($_POST["burger"])){
            echo"you selected burger <br>";
        }
        if(empty($_POST["burger"])){
            echo"you did not selected burger <br>";
        }
       
    }
?> 