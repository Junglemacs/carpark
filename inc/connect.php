<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'cpms'; 

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cpms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//connection
			$conn=mysqli_connect($db_host,$db_user,$db_pass,$db_database);
	if(!$conn)
		echo "Unable to Connect" . mysqli_connect_error();
?>