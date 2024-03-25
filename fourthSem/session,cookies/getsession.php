<?php
session_start();
echo "favourite color is ".$_SESSION['favcolor']."<br>";
echo "favourite animal is ".$_SESSION['favanimal'];

?>