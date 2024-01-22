<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learn-php";

// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}

$sqlquery = "INSERT INTO user_data VALUES 
    ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
