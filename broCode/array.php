<!--  // ARRAY
    <?php

    $foods = array("apple", "banana", "coconut");    //array

    // $foods[0]="pine";   //index 0 ma value change hunxa

    array_push($foods, "guava", "watermelon");    // end ma push hunxa one or more value can be pushed

    // array_pop($foods);  // last element gets poped

    // array_shift($foods);   //first element gets removed

    // $foods = array_reverse($foods);  //reverse an array

    foreach ($foods as $food) {
        echo $food . "<br>";
    };

    echo count($foods);

    ?>
 -->

<!-- Associative Array : key => value pair -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="array.php" method="POST">
   <label>country: </label>
        <input type=" text" name="country" id=""><br><br>
        <input type="submit" value="Submit"><br><br>

    </form>
</body>

</html>

<?php
$capitals = array(
    "USA" => "Wasington DC",
    "Nepal" => "KTM",
    "India" => "New Delhi"
);

// foreach ($capitals as $key => $value) {
//     echo "{$key} = {$value} <br>";
// }

// $capitals["USA"] = "Las Vegas";
// $capitals["China"] = "Beijing";

// $keys = array_keys($capitals);

// foreach ($keys as $key) {
//     echo "{$key} <br>";
// }


$capital = $capitals[$_POST["country"]];
echo $capital;

?>