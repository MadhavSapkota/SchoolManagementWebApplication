<?php
require_once('connect.php');

$get_id=$_GET['id'];

// sql to delete a record
$del = "Delete from assignments_record where id = '$get_id'";


$connect->exec($del);
header('location:assignment.php');
?>
