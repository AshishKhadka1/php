<!-- print -->
<?php
    echo "Hello,World<br><br>";
?>

<!-- Variables -->
<?php
    $txt = "Hello, World!"; // string
    $x = 25; // int
    $y = 10.5; // float

?>

<!-- array -->
<?php
$colours = ['red', 'blue', 'green', 'yellow'];
foreach($colours as $colour){
    echo "$colour <br>";
}

echo"<pre>";
var_dump($colours); // gives datatype, index and values of an array
echo"</pre>";

echo"<pre>";
print_r($colours); // gives index and datatype only
echo"</pre>";
?>