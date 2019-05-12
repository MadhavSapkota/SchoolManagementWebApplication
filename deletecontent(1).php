<?php
require_once('connect.php');

$get_id=$_GET['id'];

//to delete content
$del = "Delete from contents_record where id = '$get_id'";


$connect->exec($del);
header('location:modulecontent.php');
?>
