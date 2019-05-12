<?php
require_once('connect.php');

$get_id=$_GET['assignment_id'];

// sql to delete a record
$del = "Delete from assignments_record where id = '$get_id'";

// use exec() because no results are returned
$connect->exec($del);
header('location:assignment.php');
?>
