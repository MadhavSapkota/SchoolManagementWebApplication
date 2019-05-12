<?php
require_once('connect.php');

$get_id=$_GET['student_id'];

// sql to delete a record
$editstudent = "Delete from students_record where student_id = '$get_id'";

// use exec() because no results are returned
$connect->exec($editstudent);
header('location:students.php');
?>
