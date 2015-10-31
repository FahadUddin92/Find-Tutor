<?php
$servername = "";
$username = "";
$db_password = "";
$dbname = "";

// Create connection
$conn = mysqli_connect($servername, $username, $db_password, $dbname);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>