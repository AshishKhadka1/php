<?php
session_start();
if(isset($_SESSION['username'])){

echo "Welcome" . $_SESSION['username'];
echo "Your favourate category is " . $_SESSION['FavCat'];
}
else
    {
        echo"you are not login";
    }
?>