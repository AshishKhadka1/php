<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        border: 2px solid black;
        height: 110px;
        width: 240px;
        padding: 25px;
    }
</style>

<body>

    <form action="addData.php" method="post">
        <label for="name">Name :</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required><br><br>

        <label for="phone">phone :</label>
        <input type="number" id="tel" name="tel" placeholder="Enter your phone number" required><br><br>

        <input type="submit" value="Save">
    </form>
    <br><br>

    <hr>
    <table border="1px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
        </tr>

        <?php
        include 'database.php';
        $sql = "select * from info";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $phone = $row['phone'];

                // echo "{$id}={$name}={$phone}<br>";
        ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $phone ?></td>
                </tr>
        <?php
            }
        }
?>
</body>
</html>