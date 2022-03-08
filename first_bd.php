<?php  
	$servername = "localhost";
	$username = "root";
	$password = "";
	// ООП
	// $conn = new mysqli($servername, $username, $password);
	// if ($conn->connect_error) {
	// 	die("Connect failed:" .$conn->connect_error);
	// }
	// echo "Connection successfully";

	//Процедурное подключение
	// $conn = mysqli_connect($servername, $username, $password);
	// if (!$conn) {
	// 	die("Connect failed:" .mysqli_connect_error);
	// }
	// echo "Connection successfully";

	//PDO
	try{
		$conn = new PDO("mysql:host=$servername; dbname=first", $username, $password);
		echo "Connection successfully";   
	}
	catch(PDOException $e){
		echo "Connection failed:" .$e->getMessage();
	}
?>