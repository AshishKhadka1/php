<?php
$color = array(
    "light" => "blue",
    "dark" => "black"
);

echo $color["dark"];

foreach($color as $key => $value){  //no need for $key =>
    echo $key." = ".$value;     // no need for $key." = ".
}