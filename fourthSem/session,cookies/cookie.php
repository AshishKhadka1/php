<?php

$cookie_name = "ashish";
$cookie_value = "khadka";
setcookie($cookie_name, $cookie_value, time() + 3600 , "/"); 
echo "The cookie is set";
?>