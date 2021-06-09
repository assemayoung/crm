 <?php 
 	require_once 'admin/vender/connect.php';
 	$query=mysqli_query($connect, "SELECT * FROM `customers` INNER JOIN `requests` ON `customers`.`name` = `requests`.`name`");
 		while ($cus=mysqli_fetch_assoc($query)) {
 			echo $cus["name"];
 		}
 ?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form name="f1" method="post" action="search.php">
	<input type="search" name="search_q"/></br>
	</br>
	<input type="submit" value="Поиск"/></br>
	</form>
</body>
</html>
 -->