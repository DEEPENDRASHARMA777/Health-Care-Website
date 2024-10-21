<?php
function OpenCon() {
    $server = 'localhost';
    $username = 'root';
    $password = ''; // Default password for XAMPP is empty
    $database = 'mental-health-project';

    // Create connection
    $conn = new mysqli($server, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>
