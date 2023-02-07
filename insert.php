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
	<title>Employee Registration</title>
</head>
<body>

<section class="mainBody" style="height: 500px; width: 500px; margin: 0 auto;">
	<a href="crud.php"><input type="button" class="btn btn-primary" value="Show Employee List"></a>
	<h2>Add New Employee</h2>
	<hr>
	<form action="studentData.php" method="POST">
		<table cellspacing="15px;">
			<tr>
				<td>Employee First Name:</td>
				<td><input type="text" class="form-control" name="fname" placeholder="Employee First Name..." required="1"></td>
			</tr>
			<tr>
				<td>Employee Last Name:</td>
				<td><input type="text" class="form-control" name="lname" placeholder="Employee Last Name..." required="1"></td>
			</tr>
			<tr>
				<td>Birth Date:</td>
				<td><input type="date"  class="form-control" name="bdate" placeholder="Birth Date" required="1"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" class="form-control" name="email" placeholder="Email address" required="1"></td>
			</tr>
			<tr>
				<td>Contact #:</td>
				<td><input type="number" class="form-control" name="cnum" placeholder="Employee #" required="1"></td>
			</tr>
			<tr>
				<td>Department:</td>

				<td><select class="select" class="form-control" name="department" aria-label="Disabled select example" >
				<option value=1></option>
				<?php
				while($row=$result1->fetch_assoc()){
				echo "<option value=".$row["department_id"].">".$row["department_name"]."</option>";
				}
				?>
				</select></td>
			</tr>
			<tr>
				<td>Salary:</td>
				<td><input type="number" class="form-control" name="salary" placeholder="Salary" required="1"></td>
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