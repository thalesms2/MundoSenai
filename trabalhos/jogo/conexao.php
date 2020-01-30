<?php
$servername = "localhost";
$username   = "root";
$conn = new mysqli($servername, $username, "xxx", "mundosenai");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>