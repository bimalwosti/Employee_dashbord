<?php 
$conn=mysqli_connect("localhost", "root","", "record");
$Delete_Record_Id= $_GET['Delete'];
$sql = "DELETE From emp_record  WHERE id= '$Delete_Record_Id' ";
$result= mysqli_query($conn, $sql);
if ($result) {
	echo "<script>window.open('Delete_data.php?Deleated=Record Deleated successfully','_self')</script>";
}

?>