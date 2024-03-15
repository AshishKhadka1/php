<!-- <?php
        echo "<pre>";
        print_r($_GET);     // get : method sends data through url

        echo "</pre>";

        echo "{$_GET['name']}";

        ?> -->

<?php
echo "<pre>";
print_r($_POST);     // post : superglobal array is used to collect form data submitted with the HTTP POST method


echo "</pre>";

echo "{$_POST['name']}<br>";

echo "{$_REQUEST['tel']}";  // Request :superglobal array is used to collect data submitted via both the GET and POST methods



?>