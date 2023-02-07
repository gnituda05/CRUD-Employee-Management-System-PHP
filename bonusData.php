<?php
include "CSS.php";
$conn=mysqli_connect("127.0.0.1","essuser","test","employee_salary_system");

$department=$_POST['department'];
$month=$_POST['month'];
$bonus=$_POST['bonus'];






$insertBonusData="insert into `tbl_bonus`(`bonus_id`, `department_id`, `month`,`bonus`) VALUES (NULL,'$department','$month','$bonus')";

if (mysqli_query($conn,$insertBonusData)) {
	header("Location: crud.php");
}
?>