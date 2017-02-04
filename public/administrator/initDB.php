<?php
	$conexiune = mysql_connect("localhost", "root", "");
	$bd = mysql_select_db("practica", $conexiune);
	$sql = "CREATE TABLE MyGuests (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		reg_date TIMESTAMP
		)";
	mysql_query($sql, $conexiune);
		
	mysql_close($conexiune);
?>
<html>
<head>

</head>
<body>
	
</body>
</html>
