<?php
header('Content-Type: text/html; charset=utf-8');
$a = $_POST['n'];
$b = $_POST['f'];
$c = $_POST['sss'];
$d = 0;


switch ($c) {
 	case '+':
 		$d = $a + $b;
 	break;
 	case '-':
 		$d = $a - $b;
 		break;
 	case '/':
 		$d = $a / $b;
 		break;
 	case '*':
 		$d = $a * $b;
 		break;
 	
 	default:
 		echo "неверная операция";
 	break;
}
echo $a.$c.$b. "=". $d;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="123.php" method="POST">
	<br>x =<input type="text" name="n"></br>
	<br>y =<input type="text" name="f"></br>
	<select name="sss">
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="/">/</option>
  <option value="*">*</option>
</select>
	<input type="submit" value="Посчитать">	
	</form>
</body>
</html>