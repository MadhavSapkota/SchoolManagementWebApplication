<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';
if(isset($_GET['id'])){
    $ID=$_GET['id'];

    $edit = $connect->query("SELECT * FROM students_record where student_id='$ID'");
    foreach($edit as $editstudent);

   //$id = $editstudent['id'];
}
?>

<?php

if(isset($_POST['Submit'])){

    $id = $_POST['EditedId'];

    $FName = $_POST["FName"];
    $MName = $_POST["MName"];
    $LName = $_POST["LName"];
    $SID = $_POST["SID"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $PhoneNum = $_POST["PhoneNum"];
    $Address = $_POST["Address"];
    $Coursecode = $_POST["Coursecode"];

    $statement="update students_record set first_name='".$FName."',middle_name='".$MName."',last_name='".$LName."',
    student_id='".$SID."',email='".$Email."',password='".$Password."',phone_num='".$PhoneNum."',address='".$Address."',course_code='".$Coursecode."' where id=".$id;
    echo $statement;
      $update_student = $connect->query($statement);

    if($update_student){
	     echo "<script>alert('Student has been updated!')</script>";
	      echo "<script>window.open('students.php','_self')</script>";
    }
}
?>


<div id="page-wrapper">
  <div class="main-page">
    <div class="forms">
      <h2 class="title1">Forms</h2>
      <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Edit Student:</h4>
        </div>

  <form action="" method="Post">
 <fieldset>
   <span class="FieldInfo">First Name:</span><br>
   <input type="text" name="FName" value=<?php echo $editstudent['first_name'];?>><br>
    <span class="FieldInfo">Middle Name:</span><br>
    <input type="text" name="MName" value="<?php echo $editstudent['middle_name'];?>">
    <br>
    <span class="FieldInfo">Last Name:</span><br>
    <input type="text" name="LName" value="<?php echo $editstudent['last_name'];?>"><br>
    <span class="FieldInfo">Student Id:</span>
    <br><input type="text" name="SID" value="<?php echo $editstudent['student_id'];?>"><br>
     <span class="FieldInfo">Email:</span><br>
     <input type="text" name="Email" value="<?php echo $editstudent['email'];?>"><br>
     <span class="FieldInfo">Password:</span><br>
     <input type="text" name="Password" value="<?php echo $editstudent['password'];?>"><br>
    <span class="FieldInfo">Phone Number:</span><br>
    <input type="number" name="PhoneNum" value="<?php echo $editstudent['phone_num'];?>"><br>
     <span class="FieldInfo">Address:</span><br>
     <input type="text" name="Address" value="<?php echo $editstudent['address'];?>"><br>
     <span class="FieldInfo">Course Code:</span>
     <br><input type="text" name="Coursecode" value="<?php echo $editstudent['course_code'];?>"><br>

       <input type="text" name="EditedId" value="<?php echo $ID ?>"/>
<br>
  <input type="Submit" name="Submit" value="Submit Your Record"><br>


    </fieldset>

   </form>
          <a href="students.php" class="btn">Back</a>
      </div>

<iframe width="560" height="315" src="https://www.youtube.com/embed/Vvnliarkw48" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

    </div>
  </div>
</div>


<?php include 'footer.php'; ?>
