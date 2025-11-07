<?php
// Connect to database
$conn = new mysqli("localhost", "root", "", "registration_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle file upload
$file_name = "";
if(isset($_FILES['file_input']) && $_FILES['file_input']['name'] != ""){
    if (!file_exists('uploads')) {
        mkdir('uploads', 0777, true);
    }
    $file_name = time() . "_" . $_FILES['file_input']['name'];
    move_uploaded_file($_FILES['file_input']['tmp_name'], "uploads/" . $file_name);
}

// Collect hobbies as comma-separated
$hobbies = "";
if(isset($_POST['hobbies'])){
    $hobbies = implode(", ", $_POST['hobbies']);
}

// Hash password
$hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, password, email, number, tel, url, date_of_birth, datetime_local, time_input, month_input, week_input, color_input, gender, hobbies, city, country, file_input, range_input, search_input) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param(
    "ssssisssssssssssssis", 
    $_POST['firstname'], 
    $_POST['lastname'], 
    $hashed_password, 
    $_POST['email'], 
    $_POST['number'], 
    $_POST['tel'], 
    $_POST['url'], 
    $_POST['date_of_birth'], 
    $_POST['datetime_local'], 
    $_POST['time_input'], 
    $_POST['month_input'], 
    $_POST['week_input'], 
    $_POST['color_input'], 
    $_POST['gender'], 
    $hobbies, 
    $_POST['city'], 
    $_POST['country'], 
    $file_name, 
    $_POST['range_input'], 
    $_POST['search_input']
);

// Execute and check
if($stmt->execute()){
    // Redirect to display page after successful insert
    header("Location: display.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>

