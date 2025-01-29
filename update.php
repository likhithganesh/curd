<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = $conn->query("SELECT * FROM users WHERE id=$id");
        $row = $result->fetch_assoc();
    }

    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "User updated successfully!";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>

    <h2>Edit User</h2>
    <form method="post">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        <button type="submit" name="update">Update User</button>
    </form>
    <a href="index.php"><button>Add New User</button></a>
</body>
</html>
