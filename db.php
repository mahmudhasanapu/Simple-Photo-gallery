<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'photo_gallery';

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("❌ Database Connection Failed: " . $conn->connect_error);
} else {
    echo "✅ Connected to MySQL successfully.<br>";
}
?>
