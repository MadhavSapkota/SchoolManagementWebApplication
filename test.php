<?php
INCLUDE 'connect.php';
$ViewQuery = $connect->prepare("SELECT * From courses_record");
$ViewQuery->execute();
$students = $ViewQuery->fetchAll();

if(count($students) > 0){
    foreach ($students as $student) {
      echo $student['course_name'].'<br />';
    }
 }else{
     error('No users.');
 }
?>
