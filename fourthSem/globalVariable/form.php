<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* body {
        border: 2px solid black;
        height: 110px;
        width: 240px;
        padding: 25px;
        
    } */
</style>

<body>
    <?php
        require "header.php"
    ?>

    <form action="global.php" method="post">
        <label for="name">Name :</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required><br><br>

        <label for="phone">phone :</label>
        <input type="number" id="tel" name="tel" placeholder="Enter your number" required><br><br>

        <input type="submit" value="Save">
    </form>

    <?php
        include "footer.php"
    ?>

</body>
</html>