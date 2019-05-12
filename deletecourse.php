<?php
require_once('connect.php');

$get_id=$_GET['course_id'];

// sql to delete a record
$del = "Delete from courses_record where course_id = '$get_id'";

// use exec() because no results are returned
$connect->exec($del);
header('location:courses.php');
?>
