<?php
include "CSS.php";
$conn=mysqli_connect("127.0.0.1","essuser","test","employee_salary_system");

$department_name=$_POST['department_name'];






$insertDepartmentData="insert into `tbl_department`(`department_name`) VALUES('$department_name')";

if (mysqli_query($conn,$insertDepartmentData)) {
	header("Location: crud.php");
}
?>