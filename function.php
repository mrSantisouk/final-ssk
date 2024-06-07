<?php
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "hrgkanbn"; // Your database name

// Create connection
$objCon = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($objCon->connect_error) {
    die("Connection failed: " . $objCon->connect_error);
}
?>
