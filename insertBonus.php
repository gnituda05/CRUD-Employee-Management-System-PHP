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
	<title>Add Bonus</title>
</head>
<body>
<section class="mainBody" style="height: 500px; width: 500px; margin: 0 auto;">
	<a href="crud.php"><input type="button"  class="btn btn-primary" value="Show Employee List"></a>
	<h2>Add Employees Bonus</h2>
	<hr>
	<form action="bonusData.php" method="POST">
    <table cellspacing="15px;">
        <tr>
        <td>Department Name:</td>
        <td><select name="department">
        <?php
        while($row=$result1->fetch_assoc()){
        echo "<option value=".$row["department_id"].">".$row["department_name"]."</option>";
        }
        ?>
        </select></td>
        </tr>   <br>

<tr>
<td>Month:</td>

<td><select name = "month">
	<option value=1>January</option>
	<option value=2>February</option>
	<option value=3>March</option>
	<option value=4>April</option>
	<option value=5>May</option>
	<option value=6>June</option>
	<option value=7>July</option>
	<option value=8>August</option>
	<option value=9>September</option>
	<option value=10>October</option>
	<option value=11>November</option>
	<option value=12>December</option>
</select></td>
</tr>  

<tr>
    <td><label for="" class="form-label">Bonus</label><br> </td>
    <td><input type="text" name="bonus"><br></td>
    </tr> 

    <tr>
    <td></td>
   
    <td><input type="submit" value="Save" class="btn btn-primary"> </td>
</tr> 

</table>
</form>
</section>
</body>
</html>