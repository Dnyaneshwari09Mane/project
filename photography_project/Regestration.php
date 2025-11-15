<?php
// Establishing connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn ->connect_error);
}

// Fetching user input
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// SQL query to insert data into database
$sql = "INSERT INTO users (username,email, password) VALUES ('$username','$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New record created successfully');</script>";
} else {
    echo "Error " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>