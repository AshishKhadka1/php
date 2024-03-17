<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="radiobutton.php" method="POST">
        <input type="radio" name="creditCard" value="visaCard">visa Card<br>
        <input type="radio" name="creditCard" value="masterCard">MasterCard <br>
        <input type="radio" name="creditCard" value="American Express">American Express<br>

        <input type="submit" name="confirm" value="confirm">
    </form>
</body>

</html>

<?php

if (isset($_POST["confirm"])) {

    $creditCard = null;

    if (isset($_POST["creditCard"])) {
        $creditCard = $_POST["creditCard"];
    }
    switch ($creditCard) {
        case "visaCard":
            echo "visa Card";
            break;
        case "masterCard":
            echo "masterCard";
            break;
        case "American Express":
            echo "American Express";
            break;
        default:
        echo"make selection";
    }
}
?>