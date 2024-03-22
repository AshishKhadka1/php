
<?php 
    include 'connect.php';

if(isset($_POST['submit'])){
    $n = $_POST['name']; //ahish
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO form (name, email, password) VALUES ('$n', '$email', '$password')";

    $result = mysqli_query($con, $sql);
    if($result) {
        header('location:display.php');
       // echo "Data inserted successfully";
    } else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Form Design</title>
</head>

<body>
    <div class="container my-5">

        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>
</body>

</html>