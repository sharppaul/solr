<?php
$servername = "localhost";
$username = "solr";
$password = "kaas";

if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
	#http_response_code(400);
	#exit();
	echo "wtf1";
} 
 


// Create connection
$conn = new mysqli($servername, $username, $password);



// Check connection
if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
} 

if ( !isset($_POST['time']) || !isset($_POST['value']) ){
        #http_response_code(400);
        #exit();
	echo "wtf2";

}

$sql = "INSERT INTO data (time,value) VALUES (".mysql_real_escape_string(($_POST['time'])).",".mysql_real_escape_string ($_POST['value']).");";

if ($conn->query($sql) === TRUE) {
	echo "VALUES (".mysql_real_escape_string(($_POST['time'])).",".mysql_real_escape_string ($_POST['value']).")";    
} else {
	#http_response_code(500);
        #exit();
	echo "wtf3";
}

?>
