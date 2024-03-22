<?php
    include 'connect.php';


    if((isset($_GET['deleteid'])))
    {
        $id=$_GET['deleteid'];

        $sql="DELETE From form where id=$id";
        $result=mysqli_query($con, $sql);
        if($result)
        {
            header('location:display.php'); // ja xas tyahi bas
           // echo "deleted sucessfully";
        }
        else
        {
                die(mysqli_error($con));

        }
    }

?>
