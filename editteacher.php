<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';
if(isset($_GET['id'])){
    $ID=$_GET['id'];

    $edit = $connect->query("SELECT * FROM teachers_record where tutor_id='$ID'");
    foreach($edit as $editteacher);
    //
    // $id = $editteacher['id'];
}
?>

<?php
//include 'connect.php';
if(isset($_POST['SubmitUpdate'])){

    $id = $_POST['EditedId'];
    echo $id;
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


    $statement="update teachers_record set first_name='".$FName."',middle_name='".$MName."',last_name='".$LName."',
    tutor_id='".$TutorId."',email='".$Email."',password='".$Password."',phone_num='".$PhoneNum."',address='".$Address."',subject='".$Subject."',
    about='".$About."',course_code='".$Coursecode."' where id=".$id;
    echo $statement;
    $update_teacher = $connect->query($statement);

    if($update_teacher){
      echo "<script>alert('Sucessfully  updated!')</script>";

	      echo "<script>window.open('teachers.php','_self')</script>";
    }
}
?>

<div id="page-wrapper">
  <div class="main-page">
    <div class="forms">
      <h2 class="title1">Forms</h2>
      <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Edit Teacher:</h4>
        </div>
        <form action="" method="post">
         <fieldset>
              <span class="FieldInfo">First Name:</span>
              <br>
              <input type="text" name="FName" value=<?php echo $editteacher['first_name']; ?>>
              <br>
              <span class="FieldInfo">Middle Name:</span><br>
              <input type="text" name="MName" value=<?php echo $editteacher['middle_name']; ?>>
              <br>
              <span class="FieldInfo">Last Name:</span><br>
              <input type="text" name="LName" value=<?php echo $editteacher['last_name']; ?>>
              <br>
              <span class="FieldInfo">Tutor Id:</span><br>
              <input type="text" name="TutorId" value=<?php echo $editteacher['tutor_id']; ?>>
              <br>
              <span class="FieldInfo">Email:</span><br>
              <input type="text" name="Email" value=<?php echo $editteacher['email']; ?>>
              <br>
              <span class="FieldInfo">Password:</span><br>
              <input type="text" name="Password" value=<?php echo $editteacher['password']; ?>>
              <br>
              <span class="FieldInfo">Phone Number:</span><br>
              <input type="text" name="PhoneNum" value=<?php echo $editteacher['phone_num']; ?>>
              <br>
              <span class="FieldInfo">Address:</span><br>
              <input type="text" name="Address" value=<?php echo $editteacher['address']; ?>>
              <br>
              <span class="FieldInfo">Subject:</span><br>
              <input type="text" name="Subject" value=<?php echo $editteacher['subject']; ?>>
              <br>
              <span class="FieldInfo">About:</span><br>
              <input type="text" name="About" value=<?php echo $editteacher['about']; ?>>
              <br>
              <span class="FieldInfo">Course Code:</span><br>
              <input type="text" name="Coursecode" value=<?php echo $editteacher['course_code']; ?>>
              <br>

              <input type="text" name="EditedId" value="<?php echo $ID ?>"/>
              <br>
              <input type="submit" name="SubmitUpdate" value="Update">
              <br>
          </fieldset>
  </form>
          <a href="teachers.php" class="btn">Back</a>
      </div>
    </div>
  </div>
</div>



<?php include 'footer.php'; ?>
