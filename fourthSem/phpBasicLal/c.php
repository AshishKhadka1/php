<?php
// Function to swap values of two variables without using a temporary variable
function swapValues(&$a, &$b) {
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
}

$a = 5;
$b = 10;

echo "Original values: a = $a, b = $b\n";

// Swap values
swapValues($a, $b);

// Display swapped values
echo "Swapped values: a = $a, b = $b\n";
?>
