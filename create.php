<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
    <h2>Add New User</h2>
    <form method="post">
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <button type="submit" name="submit">Add User</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
        if ($conn->query($sql) === TRUE) {
            echo "User added successfully!";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>
    <a href="index.php"></a><button>index</button></a>
</body>
</html>
