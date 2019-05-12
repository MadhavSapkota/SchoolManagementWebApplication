<?php
require_once('connect.php');

$get_id=$_GET['module_id'];

// sql to delete a record
$del = "Delete from modules_record where module_id = '$get_id'";

// use exec() because no results are returned
$connect->exec($del);
header('location:modules.php');
?>
