
<?php 
$con=new mysqli('localhost','root','','form');//servername,username, password, databsename
if(!$con)
{
    die(mysqli_error($con));
}
else
{
    echo"connected
    ";

}
?>
