<?php
require_once('connect.php');

$get_id=$_GET['tutor_id'];

// sql to delete a record
$del = "Delete from teachers_record where tutor_id = '$get_id'";

// use exec() because no results are returned
$connect->exec($del);
header('location:teachers.php');
?>
