<?php
function isEven($num) {
    return $num % 2 == 0;
}
$num1 = 10;
$num2 = 7;

// Logical AND operator
if (isEven($num1) && $num2 < 10) {
    echo "$num1 is even and $num2 is less than 10\n";
} else {
    echo "$num1 is not even or $num2 is not less than 10\n";
}

// Logical OR operator
if (isEven($num1) || $num2 % 2 != 0) {
    echo "$num1 is even or $num2 is odd\n";
} else {
    echo "$num1 is odd and $num2 is even\n";
}

// Logical NOT operator
if (!isEven($num1)) {
    echo "$num1 is not even\n";
} else {
    echo "$num1 is even\n";
}
?>
