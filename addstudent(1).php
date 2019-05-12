<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';

  if(isset($_POST["Submited"])){
	if(!empty($_POST["FName"])&&!empty($_POST["SID"])){

        $FName = $_POST["FName"];
    		$MName = $_POST["MName"];
    		$LName = $_POST["LName"];
    		$SID = $_POST["SID"];
    		$Email = $_POST["Email"];
    		$Password = $_POST["Password"];
    		$PhoneNum = $_POST["PhoneNum"];
    		$Address = $_POST["Address"];
    		$Coursecode = $_POST["Coursecode"];

        $insertStudent = "INSERT INTO students_record(first_name,middle_name,last_name,student_id,email,password,phone_num,address,course_code)
        VALUES('".$FName."','".$MName."','".$LName."','".$SID."','".$Email."','".$Password."','".$PhoneNum."','".$Address."','".$Coursecode."')";

		$connect->exec($insertStudent);
      echo 'New Record inserted';

	}
	else{
		echo '<span class="FieldInfoHeading">Please fill Atleast First Name and SID</span>';
	}
}
?>

<div id="page-wrapper">
  <div class="main-page">
    <div class="forms">
      <h2 class="title1">Forms</h2>
      <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Basic Form :</h4>
        </div>
        <form action="addstudent.php" method="Post">
       <fieldset>
         <span class="FieldInfo">First Name:</span><br><input type="text" name="FName" value=""><br>
          <span class="FieldInfo">Middle Name:</span><br><input type="text" name="MName" value=""><br>
          <span class="FieldInfo">Last Name:</span><br><input type="text" name="LName" value=""><br>
          <span class="FieldInfo">Student Id:</span><br><input type="text" name="SID" value=""><br>
           <span class="FieldInfo">Email:</span><br><input type="text" name="Email" value=""><br>
           <span class="FieldInfo">Password:</span><br><input type="text" name="Password" value=""><br>
          <span class="FieldInfo">Phone Number:</span><br><input type="number" name="PhoneNum" value=""><br>
           <span class="FieldInfo">Address:</span><br><input type="text" name="Address" value=""><br>
           <span class="FieldInfo">Course Code:</span><br><input type="text" name="Coursecode" value=""><br>
    <br>
        <input type="Submit" name="Submited" value="Submit Your Record"><br>


          </fieldset>

         </form>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
