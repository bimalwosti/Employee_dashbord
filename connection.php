<!DOCTYPE html>
<html>
<head>
	<title>name</title>
</head>
<body>
	<?php  
	$conn=mysqli_connect("localhost", "root","", "record");
	if ($conn) {
         echo "database connected successfully <br>";

		}
		else{
			error.mysql_connect();
		}




	 ?>

</body>
</html>