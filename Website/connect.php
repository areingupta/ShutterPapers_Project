<?php

$email = $_POST['email'];

/* 
Ways to connect to a MySQL Database
1. MySQLi extension
2. PDO
*/
// Connecting to the Database
$servername = "localhost";
$username = "u284565536_shp_";
$password = "Shp_3579";

// For connection
$conn = mysqli_connect($servername, $username, $password);

if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    $stmt = $conn->prepare("insert into SHP_contact(email) values(?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Thanks for connecting...";
		$stmt->close();
		$conn->close();
}

?>