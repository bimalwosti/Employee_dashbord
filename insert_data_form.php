<?php

if (isset($_POST["Submit"])) {
	if (!empty($_POST["EName"])&&!empty($_POST["SSN"])) {
	$EName = $_POST["EName"];
	$SSN = $_POST["SSN"];
	$Dept = $_POST["Dept"];
	$Salary = $_POST["Salary"];
	$HomeAddress = $_POST["HomeAddress"];
	$conn=mysqli_connect("localhost", "root","", "record");
	$sql= "INSERT INTO emp_record(ename, ssn, dept, salary, homeaddress) 
	VALUES ('$EName', '$SSN', '$Dept', '$Salary', '$HomeAddress' )";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "Data added successfully";
	}
}
else {
	echo " please fill Both name and SSN";
}

}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Insert Data Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
     <div>
     	<form action="insert_data_form.php" method="post">
     		<fieldset>
     			<h3>Employee Information Form</h3><br>

     	     <input class="form-control" type="text" name="EName" placeholder="EName"><br>
     		<input class="form-control" type="text" name="SSN" placeholder="Social Security Number"><br>
     		<input class="form-control" type="text" name="Dept" placeholder="Dept"><br>
     		<input class="form-control" type="text" name="Salary" placeholder="Salary"><br>
     		 <textarea class="form-control" type="text" name="HomeAddress" placeholder="HomeAddress"></textarea> <br>
     		 <input type="submit" name="Submit" value="submit"><br>

     		</fieldset>
     	</form>
     	


     </div>



	<?php ?>

</body>
</html>