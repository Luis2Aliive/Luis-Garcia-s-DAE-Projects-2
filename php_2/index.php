<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "versevibe_database";

// Create Connection
$conn = new mysqli ($servername, $username, $password, $versevibe_database);

// Check Connection 
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$age = 17

if ($age >= 18) {
    echo "You Are Allowed To Register.";
} else {
    echo "Sorry, You Must Be 18 Or Older To Register."
}

?>