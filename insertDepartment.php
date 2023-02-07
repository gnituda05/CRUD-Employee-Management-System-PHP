<?php
include "CSS.php";
$conn=mysqli_connect("127.0.0.1","essuser","test","employee_salary_system");

	$getEmployeeData= "select * from tbl_employee";
	$result=mysqli_query($conn,$getEmployeeData);
	$getEmployeeData1= "select * from tbl_department";
	$result1=mysqli_query($conn,$getEmployeeData1);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Department</title>
</head>
<body>

<section class="mainBody" style="height: 500px; width: 500px; margin: 0 auto;">
	<a href="crud.php"><input type="button" class="btn btn-primary" type="button"  value="Show Employee List"></a>
	<h2>Add New Department</h2>
	<hr>
	<form action="departmentData.php" method="POST">
		<table cellspacing="15px;">
			<tr>
				<td>Department Name:</td>
				<td><input type="text" class="form-control" name="department_name" placeholder="Department Name" required="1"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="save" value="Save"></td>
			</tr>
		</table>
	</form>	
</section>

</body>
</html>