<?php

$emp = [
    [1, 'ashish', 'salesman'],
    [2, 'sayam', 'principal'],
    [3, 'indira', 'teacher']
];

// echo "<pre>";
// print_r($emp);
// echo "</pre>";

foreach($emp as $val1){     // 2 for each is required
    foreach($val1 as $val2){
        echo $val2. " ";
    }
    echo "<br>";
}

?>