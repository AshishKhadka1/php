<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="sanitize_validate.php" method="POST">
        username: <br>
        <input type="text" name="username" id=""><br><br>
        age: <br>
        <input type="text" name="age" id=""><br><br>
        email: <br>
        <input type="text" name="email" id=""><br><br>
        <input type="submit" name="login" value="submit" ><br><br>
    </form>
</body>

</html>
<?php
if (isset($_POST["login"])) {

    //  SANITIZE CODE
    // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    // echo "Your name is {$username}.<br>";
    // echo "You are {$age} years old.<br>";
    // echo "Your email is {$email}.";


    // VALIDATE CODE
    if (isset($_POST["login"])) {
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        if (empty($age)) {
            echo "Please enter a valid age<br><br>";
        } else {
            echo "You are {$age} years old  <br><br>";
        }

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        if (empty($email)) {
            echo "Please enter a valid email";
        } else {
            echo "Your email is {$email}";
        }
    }
}
?>