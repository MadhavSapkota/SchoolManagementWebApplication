<?php
require_once('connect.php');

$get_id=$_GET['id'];

// sql to delete a record
$del = "Delete from students_grade where id = '$get_id'";


$connect->exec($del);
header('location:result.php');
?>
