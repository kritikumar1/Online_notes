<?php
$host = "localhost";
$user = "root";        // hosting re change kariba
$pass = "";
$db   = "notexia";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
