<?php 
//PDO
$host = 'localhost';
$db = 'mysite';
$user = 'root';
$pass = '';
try {
	$connection = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
} 
catch(PDOException $e){
		echo "Connection failed:" .$e->getMessage();
	}

	//Прямой запрос
// $query = "INSERT user (id, author, book) VALUES ('NULL','Naruto', 'Повесть о саске')";
// $count = $connection->exec($query);

// echo $count;

$id = 'NULL';
$author = 'Suker';
$book = 'For suker';

$sql = "INSERT user (id, author, book) VALUES (:i, :author, :book)";
$query = $connection->prepare($sql);
$query->execute(['i'=>$id, 'author'=>$author, 'book'=>$book]);
?>