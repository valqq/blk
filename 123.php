<?php
session_start();
if(!isset($_SESSION['user_name'])){
	header('Location: login.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h1>Главная страница</h1>
</body>
</html>