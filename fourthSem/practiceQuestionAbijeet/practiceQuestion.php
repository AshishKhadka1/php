<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <div>
            <div>Name</div>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <div>email</div>
            <input type="email" name="email" id="email" required>
        </div>
        
        <div>
            <div>message</div>
            <textarea name="message" id="message" rows="12" cols="30" required> </textarea> 
        </div>

        <button type="submit">Submit</button>
    </form>
</body>

</html>

<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpclass";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn -> connect_errno){
        die("connection failed ". $conn->connect_error);
    };
    
    echo "database connected successfully";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // CREATE TABLE USING MYSQL
    // $createTable = "CREATE TABLE feedback (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50), email varchar(50), message TEXT)";
    // $result = mysqli_query($conn, $createTable);

    // if($result){
    //     echo "table created";
    // } else {
    //     echo "failed to create table";
    // }

    try {
        $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";
        $result = mysqli_query($conn, $sql);  
        if($result){
            echo "inserted data into table";
        }
    } catch (\Throwable $th) {
        echo $th;
    }

?>
<!-- write a php script that uses a foreach loop to iterate over an associative array containing student names as keys and their corresponding grades as values -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab works 17 1. </title>
</head>

<body>
    <h1>17 a. Write a php script that uses a foreach loop to iterate over an associative array containing student names as keys and their corresponding grades as values</h1>
    <?php
        $array = [
            "name1" => "abijeet",
            "name2" => "kapil",
            "names3" => "mausam"
        ];

        foreach ($array as $key => $value) {
            echo "{$key} {$value} ";
        };
    ?>

    <h1>17 b. define a php function called "calculateCircleArea" that takes the radious of a circle as parameter and returns its area."</h1>
    <?php
        function findArea($radious){
            echo 2 * (22/7) * $radious;
        };
        
        findArea(12);
    ?>

    


</body>

</html>
