<?php
require_once('connect.php');

$get_id=$_GET['event_id'];

// sql to delete a record
$del = "Delete from events_record where event_id = '$get_id'";

// use exec() because no results are returned
$connect->exec($del);
header('location:events.php');
?>
