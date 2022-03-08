<?php 
require_once 'bd.php';

//подключение к MySQL
$connection = new mysqli($host, $user, $pass, $db);
if($connection->connect_error) die('Error connection');

//  //Запрос данных
// $query = "SELECT * FROM user";
// $result = $connection->query($query);
// if(!$result) die('Error select');

// $rows = $result->num_rows;
// for ($i=0; $i < $rows; $i++) { 
// 	$result->data_seek($i);
// 	echo 'author: ' .$result->fetch_assoc()['author'] .'<br>';
// }

// echo '<pre>';
// print_r($rows);
// echo '</pre>';
$query_str="INSERT INTO user (id, author, book) VALUES ('NULL', 'Ксюша', 'Привет')";
if ($connection->query($query_str)) {
      echo '<p>Данные успешно добавлены в таблицу.</p>';
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($connection) . '</p>';
    }
// $result->close();
$connection->close();
 ?>