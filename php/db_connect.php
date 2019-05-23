<?php
$servername = "localhost";
$username = "coenwrq206_db";
$password = "artdepartment";
$dbname = "coenwrq206_picklesenmayo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>