<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <form action="function.php" method="POST">
        <label for="">username: </label>
        <input type="text" name="username"><br><br>
        <label for="">password: </label>
        <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="log in">
    </form><br>
</body>
</html>
<?php
    // $username = "brocode";

    // isset() = Returns TRUE if a variable is declared and not null
    // echo isset($username);
    

    // empty() = Returns TRUE if a variable is not declared, false, null, ""
    // if(empty($username)){
    //     echo"This variable is empty";
    // }else{
    //     echo"This variable is not empty";
    // }

    // foreach($_POST as $key =>$value){
    //     echo"{$key} = {$value} <br>";
    // }

    if(isset($_POST['login'])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo"username is missing";
        }
        elseif(empty($password)){
            echo"password is missing";
        }
        else{
            echo"Successfully login";
        }
    }


?>