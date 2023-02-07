<?php
include "CSS.php";
$conn=mysqli_connect("127.0.0.1","essuser","test","employee_salary_system");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$bdate=$_POST['bdate'];
$email=$_POST['email'];
$cnum=$_POST['cnum'];
$department=$_POST['department'];
$salary=$_POST['salary'];





$insertEmployeeData="insert into `tbl_employee`(`employee_id`, `first_name`, `last_name`,`birth_date`, `email_address`, `contact_number`, `salary`, `department_id`) VALUES (NULL,'$fname','$lname','$bdate','$email','$cnum','$salary','$department')";

if (mysqli_query($conn,$insertEmployeeData)) {
	header("Location: crud.php");
}
?>