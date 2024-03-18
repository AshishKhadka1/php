<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>This is home page.</h3>
  <form action="home.php" method="POST">
    <h4>Click on Log Out to go to login page</h4>
    <input type="submit" name="logout" value="logout">
  </form>
</body>

</html>

<?php

echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";

if (isset($_POST["logout"])) {
  session_destroy();
  header("location: index.php");
}

?>