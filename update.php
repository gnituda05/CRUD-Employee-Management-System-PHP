<?php
include "CSS.php";
$conn=mysqli_connect("127.0.0.1","essuser","test","employee_salary_system");


$eid=$_GET['id'];

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$bdate=$_POST['bdate'];
$email=$_POST['email'];
$cnum=$_POST['cnum'];
$department=$_POST['department'];
$salary=$_POST['salary'];

$updateEmployeeData="update tbl_employee set first_name='$fname', last_name='$lname', birth_date='$bdate',email_address='$email',contact_number='$cnum',salary='$salary', department_id='$department' WHERE employee_id='$eid'";

if (mysqli_query($conn,$updateEmployeeData)) {
	header("Location: crud.php");
}
?>