<?php
$database="casualwork_db";
$username="root";
$password="";
$servername='localhost';

$conn= mysqli_connect($username, $password, $database, $servername);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "Connected successfully";
}

$sql = "INSERT INTO users (name, email, password) VALUES ('John Doe', 'john@example.com', 'password123')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

