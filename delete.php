<?php
include "CSS.php";
$conn=mysqli_connect("127.0.0.1","essuser","test","employee_salary_system");


$employee_id=$_GET['id'];

$deleteEmployeeData="delete from tbl_employee where employee_id = '$employee_id' ";
$result=mysqli_query($conn,$deleteEmployeeData);					

if ($result) {
	header("Location: crud.php");
}
?>