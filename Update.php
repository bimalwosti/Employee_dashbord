<?php 
$conn=mysqli_connect("localhost", "root","", "record");
$Update_Record=$_GET["Update"];
$sql= "SELECT * FROM emp_record WHERE id= '$Update_Record' ";
$result= mysqli_query($conn, $sql);
while ($Data_Rows=mysqli_fetch_assoc($result)) {
	$Update_Id= $Data_Rows['id'];
	$EName = $Data_Rows['ename'];
	$SSN = $Data_Rows['ssn'];
	$Dept = $Data_Rows['dept'];
	$Salary = $Data_Rows['salary'];
	$HomeAddress = $Data_Rows['homeaddress'];

}




?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Data Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
     <div>
     	<form action="Update.php?Update_Id=<?php echo $Update_Id; ?>" method="post">
     		<fieldset>
     			<h3>Employee Information Form</h3><br>

     	     <input class="form-control" type="text" name="EName" value="<?php echo $EName; ?>"    placeholder="EName"><br>
     		<input class="form-control" type="text" name="SSN" value="<?php echo $SSN; ?>" placeholder="Social Security Number"><br>
     		<input class="form-control" type="text" name="Dept" value="<?php echo $Dept; ?>" placeholder="Dept"><br>
     		<input class="form-control" type="text" name="Salary" value="<?php echo $Salary; ?>" placeholder="Salary"><br>
     		 <textarea class="form-control" type="text" name="HomeAddress"  " placeholder="HomeAddress"><?php echo $HomeAddress; ?></textarea> <br>
     		 <input type="submit" name="Submit" value="submit"><br>

     		</fieldset>
     	</form>
     	


     </div>



	<?php ?>

</body>
</html>

<?php
$conn=mysqli_connect("localhost", "root","", "record");


if(isset($_POST['Submit'])){
	$Update_Id = $_GET['Update_Id'];

     $EName = $_POST["EName"];
	$SSN = $_POST["SSN"];
	$Dept = $_POST["Dept"];
	$Salary = $_POST["Salary"];
	$HomeAddress = $_POST["HomeAddress"];
    $sql ="UPDATE emp_record SET ename= '$EName', snn ='$SNN', dept='$Dept', salary='$Salary',homeaddress='$HomeAddress' WHERE id ='$Update_Id' ";

$result = mysqli_query($conn, $sql);
if($result){
	function redirect_to($newlocation){
		header("Locetion:".$newlocation );
		exit;

	}
	redirect_to("Update_data.php?Updated=Record Updated Successfully");
}


}





 ?>