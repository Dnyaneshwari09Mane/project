<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    .card{
        background-color:rgb(210, 200, 200);
        height:10cm;
        width:10cm;
        border-radius: 15px;
        font-size: 25px;
    }
        </style>
</head>
<body>
    <center><div class="card">
        <h2 style="padding-top: 0.5cm;">Login</h2>
        <b><label for="UN">Username :</label></b>
        <input type="text" id="UN" name="Name" placeholder="Enter Your Name">  <br><br>
        <b><label for="UN">Email-id :</label></b>
        <input type="text" id="EM" name="email" placeholder="Enter Your Email"><br><br>
       <b><label for="UN">Password :</label></b>
        <input type="text" id="PS" name="password" placeholder="Enter Your Password"><br><br>
        <a href="http://127.0.0.1:3000/d:/DIET%20VAP/forgot%20password.html">forgot Password</a><br><br>
       <button style="background-color: rgb(65, 60, 60);color:white;height: 40px;width:2.5cm;font-size:20px;">Submit</button>
               </div>
</body>
</html> -->


<?php
// Establishing connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn>connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetching user input
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to check if user exists
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn>query($sql);

if ($result->num_rows > 0) {
    
    session_start();
    $_SESSION['indexId']=$_POST['username'];
    header("location:1stpage.html");
    
} else {
    
    echo "<script>alert('Invalid username or password');</script>";
}

$conn->close();
?>