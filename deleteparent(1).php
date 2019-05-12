<?php
require_once('connect.php');

$get_id=$_GET['id'];

// sql to delete a record
$del = "Delete from parents_record where id = '$get_id'";

// use exec() because no results are returned
$connect->exec($del);
header('location:parents.php');
?>
