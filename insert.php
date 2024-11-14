<?php 
	$connect = mysqli_connect("MySQL-8.2","root","","wishlist");
	mysqli_query($connect, 'SELECT * FROM game');

	mysqli_query($connect, "INSERT INTO game (img, title, price) VALUES ('{$_GET["img"]}','{$_GET["title"]}', '{$_GET["price"]}')");

	header("Location: https://wishlist.local/index.php")
 ?>