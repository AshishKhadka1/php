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
   <form action="form.php" method="post">
     <label for="">username: </label>
    <input type="text" name="username" id=""><br><br>

    <label for="">password: </label>
    <input type="text" name="password" id=""><br><br>

    <input type="submit" value="submit" id="">
   </form>

</body>
</html>