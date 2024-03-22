<!DOCTYPE html>
<html>
<head>
    <title>CRUD Operations</title>
</head>
<body>
    <h2>Create New User</h2>
    <form method="post" action="crud.php">
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <input type="submit" name="create" value="Create">
    </form>

    <h2>Update User</h2>
    <form method="post" action="crud.php">
        <label>User ID:</label>
        <input type="text" name="id" required><br>
        <label>New Name:</label>
        <input type="text" name="new_name" required><br>
        <input type="submit" name="update" value="Update">
    </form>

    <h2>Delete User</h2>
    <form method="post" action="crud.php">
        <label>User ID:</label>
        <input type="text" name="id" required><br>
        <input type="submit" name="delete" value="Delete">
    </form>
</body>
</html>
