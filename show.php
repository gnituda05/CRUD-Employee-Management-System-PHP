<?php
include "CSS.php";
$conn=mysqli_connect("127.0.0.1","essuser","test","employee_salary_system");

	$eid=$_GET['id'];
	//$getEmployeeData="SELECT * FROM employees WHERE eid='$eid'";
	$sqlQry = "select e.employee_id, e.last_name, e.first_name, e.birth_date, e.contact_number, e.salary,e.email_address, e.department_id, d.department_name, from tbl_employee as e left join tbl_department as d on(e.department_id=d.department_id)";
	$result=mysqli_query($conn,$sqlQry);
	$emp=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee MGT</title>
</head>
<body>

<section class="mainBody" style="height: 500px; width: 500px; margin: 0 auto;">
	<a href="insert.php"><input type="button" value="Add New Employee"></a>
	<a href="crud.php"><input type="button" value="Home"></a>
	<h2>Employee Information</h2>
	<hr>
		<table style="width:40%" border="1px solid black"; id="table" class="table table-dark table-striped-columns">
			<thead>
				<th>Employee ID</th>
				<th>Employee First Name</th>
				<th>Employee Last Name</th>
				<th>Birth Date</th>
				<th>Email</th>
				<th>Department ID</th>
				<th>Department Name</th>
				<th>Contact #</th>
				<th>Salary</th>
				<th>Action</th>
			
			</thead>

			<tbody>


			<tr>
					<td><?php echo $row['employee_id']?></td>
					<td><?php echo $row['first_name']?></td>
					<td><?php echo $row['last_name']?></td>
					<td><?php echo $row['birth_date']?></td>
					<td><?php echo $row['email_address']?></td>
					<td><?php echo $row["department_id"]?></td>
					<td><?php echo $row["department_name"]?></td>
					<td><?php echo $row['contact_number']?></td>
					<td><?php echo $row['salary']?></td>
					
				</tr>


			</tbody>
		</table>
</section>

</body>
</html>