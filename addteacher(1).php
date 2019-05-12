<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';

  if(isset($_POST["Submit"])){
	if(!empty($_POST["FName"])&&!empty($_POST["TutorId"])){

    $FName = $_POST["FName"];
    $MName = $_POST["MName"];
    $LName = $_POST["LName"];
    $TutorId = $_POST["TutorId"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $PhoneNum = $_POST["PhoneNum"];
    $Address = $_POST["Address"];
    $Subject = $_POST["Subject"];
    $About = $_POST["About"];
    $Coursecode = $_POST["Coursecode"];

    $insertTeacher = "INSERT INTO teachers_record(first_name,middle_name,last_name,tutor_id,email,password,phone_num,address,subject,about,course_code)
        VALUES('".$FName."','".$MName."','".$LName."','".$TutorId."','".$Email."','".$Password."','".$PhoneNum."','".$Address."','".$Subject."','".$About."','".$Coursecode."')";

		$connect->exec($insertTeacher);
      echo 'New Record inserted';

	}
	else{
		echo '<span class="FieldInfoHeading">Please fill Atleast First Name and TutorId</span>';
	}
}
?>

 <div id="page-wrapper">
   <div class="main-page">
    <div class="forms" >

      <h2 class="title1">Forms</h2>

      <?php require  'addForm.php' ?>

      <!-- <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Basic Form :</h4>
        </div>
        <form action="addteacher.php" method="Post">
	    <fieldset>
       <span class="FieldInfo">First Name:</span><br><input type="text" name="FName" value=""><br>
       <span class="FieldInfo">Middle Name:</span><br><input type="text" name="MName" value=""><br>
        <span class="FieldInfo">Last Name:</span><br><input type="text" name="LName" value=""><br>
       <span class="FieldInfo">Teacher Id:</span><br><input type="text" name="TutorId" value=""><br>
       <span class="FieldInfo">Email:</span><br><input type="text" name="Email" value=""><br>
      <span class="FieldInfo">Password:</span><br><input type="text" name="Password" value=""><br>
      <span class="FieldInfo">Phone Number:</span><br><input type="number" name="PhoneNum" value=""><br>
      <span class="FieldInfo">Address:</span><br><input type="text" name="Address" value=""><br>
      <span class="FieldInfo">Subject:</span><br><input type="text" name="Subject" value=""><br>
      <span class="FieldInfo">About:</span><br><input type="text" name="About" value=""><br>
      <span class="FieldInfo">Course Code:</span><br><input type="text" name="Coursecode" value=""><br>
<br>
<input type="Submit" name="Submit" value="Submit Your Record"><br>


</fieldset>

</form>
      </div> -->
    </div>
  </div> 
  
</div> 


<?php include 'footer.php'; ?>
