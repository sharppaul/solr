<?php
$servername = "localhost";
$username = "solr";
$password = "kaas";
$database = "solr";

if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
	//	http_response_code(400);
	// 	exit();
	echo "No sql.";
} 
 


// Create connection
$conn = new mysqli($servername, $username, $password, $database);

header('Content-Type:text/plain');

// Check connection
if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
} 

if ( !isset($_GET['time']) || !isset($_GET['value']) ){
		//http_response_code(400);
		exit();
		echo "leeg";
}
echo print_r($_GET);

$sql = "INSERT INTO data (time,value) VALUES (".$_GET['time'].", ".$_GET['value'].");";

echo $sql;

if ($conn->query($sql)) echo PHP_EOL."Done".PHP_EOL;
?>

