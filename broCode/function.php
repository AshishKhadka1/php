<?php
function happy_birthday($name, $age)
{
    echo "happy birthday dear {$name} <br> ";
    echo "happy birthday to you <br> ";
    echo "many many happy returns of the day {$name} <br> ";
    echo "you are {$age} years old <br><br>";
}

happy_birthday("spongebob", 33);
happy_birthday("patrik", 5);


// next video 
// $username = "Ashish Khadka sir";

$username = array("bro", "the", "coder");


$phone = '123-456';

// $username = strtolower($username);
// $username = strtoupper($username);
// $username = trim($username);
// $username = str_pad($username, 20, "0");
// $phone = str_replace("-", "&", $phone);
// $username = strrev($username);
// $username = str_shuffle($username);
// $equals = strcmp("aman", $username);
// $username = strlen($username);
// $username = strpos($username, " ");
// $firstname = substr($username, 0, 7);

// $fullname = explode(" ", $username);
$username = implode("_", $username);

// foreach($fullname as $name){     //for explode only
//     echo $name ."<br>";

// }

echo $username
?>

