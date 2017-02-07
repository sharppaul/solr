<?php
$servername = "localhost";
$username = "solr";
$password = "kaas";

if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}

// Create connection
$conn = new mysqli($servername, $username, $password);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>