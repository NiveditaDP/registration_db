<?php
$conn = new mysqli("localhost", "root", "", "registration_db");
if($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "";
    $stmt = $conn->prepare("UPDATE users SET firstname=?, lastname=?, email=?, gender=?, city=?, country=?, hobbies=? WHERE id=?");
    $stmt->bind_param("sssssssi", $_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['gender'], $_POST['city'], $_POST['country'], $hobbies, $id);
    $stmt->execute();
    header("Location: display.php");
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update User</title>
</head>
<body>
    <h2>Update User</h2>
    <form method="post">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        First Name: <input type="text" name="firstname" value="<?= $row['firstname'] ?>" required><br>
        Last Name: <input type="text" name="lastname" value="<?= $row['lastname'] ?>" required><br>
        Email: <input type="email" name="email" value="<?= $row['email'] ?>" required><br>
        Gender: 
        <input type="radio" name="gender" value="Male" <?= $row['gender']=="Male"?"checked":""?>> Male
        <input type="radio" name="gender" value="Female" <?= $row['gender']=="Female"?"checked":""?>> Female<br>
        City: <input type="text" name="city" value="<?= $row['city'] ?>"><br>
        Country: <input type="text" name="country" value="<?= $row['country'] ?>"><br>
        Hobbies:
        <input type="checkbox" name="hobbies[]" value="Reading" <?= strpos($row['hobbies'],"Reading")!==false?"checked":""?>> Reading
        <input type="checkbox" name="hobbies[]" value="Sports" <?= strpos($row['hobbies'],"Sports")!==false?"checked":""?>> Sports
        <input type="checkbox" name="hobbies[]" value="Music" <?= strpos($row['hobbies'],"Music")!==false?"checked":""?>> Music<br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
