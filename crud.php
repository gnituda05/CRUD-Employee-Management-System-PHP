<?php
include "CSS.php";
	$conn=mysqli_connect("127.0.0.1","essuser","test","employee_salary_system");

	$getEmployeeData= "select e.employee_id, e.last_name, e.first_name, e.birth_date, e.contact_number, e.salary,e.email_address, e.department_id, d.department_name, (e.salary * b.bonus / 100) as bonus from tbl_employee as e left join tbl_department as d on(e.department_id=d.department_id) left join tbl_bonus as b on (e.department_id = b.department_id)";
	$result=mysqli_query($conn,$getEmployeeData);


?>

<!DOCTYPE html>
<html>

<head>
	<title>Employee Management</title>
</head>
<body>

<section class="mainBody" style="height: 500px; width: 1000px; margin: 0 auto;">
	<a href="insertDepartment.php"><input type="button" class="btn btn-primary" value="Add New Department"></a>
	<a href="insert.php"><input type="button" class="btn btn-primary" value="Add New Employee"></a>
	<a href="insertBonus.php"><input type="button" class="btn btn-primary" value="Add Employee's Bonus"></a>
	
	<h2>Employee List</h2>
	<div class="input-group">
  <input type="search" name="filter_value"  style="height: 40px; margin: 0 auto;" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <button type="button" name="filter_btn" class="btn btn-outline-primary">search</button>
</div>
  


		<table style="width:100%" border="4px solid black" class="table table-hover" >
			<thead>
				<th>Employee ID</th>
				<th>Employee First Name</th>
				<th>Employee Last Name</th>
				<th>Birth Date</th>
				<th>Email</th>
				<th>Department ID</th>
				<th>Department Name</th>
				<th>Contact #</th>
				<th>Monthly Salary</th>
				<th>Salary with Bonus</th>
				
			
				<th>Action</th>
			
			</thead>

			<tbody>
				<?php
				if(isset($_POST["filter_btn"]))
				{
					$value_filter = $_POST['filter_value'];
					$query = "select e.employee_id, e.last_name, e.first_name, e.birth_date, e.contact_number, e.salary,e.email_address, e.department_id, d.department_name as e left join tbl_department as d on(e.department_id=d.department_id) left join tbl_bonus as b on (e.department_id = b.department_id) where CONCAT(first_name, last_name, department_id) LIKE '%$value_filter%' ";
					
					$query_run = mysqli_connect($conn, $query);
					
					if(mysqli_num_rows($query_run) > 0) {
						while($row = mysqli_fetch_array($query_run)){
							?>
					<tr>
					<td><?php echo $row['employee_id'];?></td>
					<td><?php echo $row['first_name'];?></td>
					<td><?php echo $row['last_name'];?></td>
					<td><?php echo $row['birth_date'];?></td>
					<td><?php echo $row['email_address'];?></td>
					<td><?php echo $row["department_id"];?></td>
					<td><?php echo $row["department_name"];?></td>
					<td><?php echo $row['contact_number'];?></td>
					<td><?php echo $row['salary'];?></td>
					<td><?php echo $row['bonus'];?></td>	
					</tr>
					<?php
							}
					} else 
					{	?>
						<tr>
						<td colspan="10"> No Record Found! </td>
						</tr>
						<?php
					}
				}
				?>

				<?php while($row=mysqli_fetch_assoc($result)) { ?>

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
					<td><?php echo $row['bonus']?></td>
					<td>
						
						<a href="edit.php?id=<?php echo $row['employee_id'];?>"><button class="btn btn-info" >Edit</button></a>
						<br>
						<a href="delete.php?id=<?php echo $row['employee_id'];?>" onclick="return confirm('Are you sure?')"><button class="btn btn-danger">Delete</button></a>
					</td>
				</tr>

				<?php } ?>

			</tbody>
		</table>
</section>

</body>
</html>