<?php
$conn = new mysqli("localhost", "root", "", "registration_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registered Users</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
            padding: 20px;
        }
        h2 { 
            text-align: center; 
            color: #333; 
            margin-bottom: 20px;
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            background-color: rgba(255,255,255,0.9); /* semi-transparent */
        }
        table, th, td { border: 1px solid #ccc; }
        th, td { padding: 10px; text-align: left; }
        a { text-decoration: none; color: white; padding: 5px 10px; border-radius: 5px; }
        .update { background-color: #28a745; }
        .delete { background-color: #dc3545; }
        a:hover { opacity: 0.8; }
    </style>
</head>
<body>
    <h2>Registered Users</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>City</th>
            <th>Country</th>
            <th>Hobbies</th>
            <th>Actions</th>
        </tr>
        <?php while($row = $result->fetch_assoc()){ ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['firstname'] . " " . $row['lastname'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['gender'] ?></td>
            <td><?= $row['city'] ?></td>
            <td><?= $row['country'] ?></td>
            <td><?= $row['hobbies'] ?></td>
            <td>
                <a href="update.php?id=<?= $row['id'] ?>" class="update">Update</a>
                <a href="delete.php?id=<?= $row['id'] ?>" class="delete">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
