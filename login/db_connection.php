<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

try {
    // Create a new PDO instance and set the connection options
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    
    // Set the PDO error mode to exception (for error handling)
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Optional: Confirmation message if the connection is successful
    // echo "Connected successfully to the database.";
}
catch(PDOException $e) {
    // Handle connection error
    die("Connection failed: " . $e->getMessage());
}
?>
