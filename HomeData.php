<?php
 $host_name = "localhost";
 $user_name = "root";
 $password = "";
 $db_name = "Perfume";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM products"; // Modify the query based on your table structure
$result = $conn->query($query);

$conn->close();
?