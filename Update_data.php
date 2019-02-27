
<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">I.D</th>
      <th scope="col">Employee Nmae</th>
      <th scope="col">Social Security Number</th>
      <th scope="col">Department</th>
      <th scope="col">Salary</th>
      <th scope="col">Home Address</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
<?php 

   $conn=mysqli_connect("localhost", "root","", "record");
   $sql = "SELECT * FROM emp_record";
   $result = mysqli_query($conn, $sql);
   while ($DataRows= mysqli_fetch_assoc($result)) {
   	$ID = $DataRows['id'];
   	$EName = $DataRows['ename'];
   	$SSN = $DataRows['ssn'];
   	$Dept = $DataRows['dept'];
   	$Salary = $DataRows['salary'];
   	$HomeAddress = $DataRows['homeaddress'];


       
?>
  <tbody>

   <tr>
      <td><?php echo $ID; ?></td>
      <td><?php  echo $EName; ?></td>
      <td><?php echo $SSN; ?></td>
      <td><?php echo $Dept; ?></td>
      <td><?php echo $Salary; ?></td>
      <td><?php echo $HomeAddress; ?></td>
      <td><a href="Delete.php?Delete=<?php echo $ID; ?>"> Delete</a></td>
      <td><a href="Update.php?Update=<?php echo $ID; ?>"> Update</a></td>



    </tr>
  </tbody>
<?php } ?>
</table>



</body>
</html>