<?php
$conn = new mysqli("localhost", "root", "", "registration_db");
if($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$id = $_GET['id'];
$conn->query("DELETE FROM users WHERE id=$id");
header("Location: display.php");
?>
