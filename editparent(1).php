<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';
if(isset($_GET['id'])){
    $ID=$_GET['id'];

    $edit = $connect->query("SELECT * FROM parents_record where id='$ID'");
    foreach($edit as $editparent);
    //
    // $id = $editparent['id'];
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
    $SID = $_POST["SID"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $PhoneNum = $_POST["PhoneNum"];
    $Address = $_POST["Address"];


    $statement="update parents_record set first_name='".$FName."',middle_name='".$MName."',last_name='".$LName."',
    student_id='".$SID."',email='".$Email."',password='".$Password."',phone_num='".$PhoneNum."',address='".$Address."'
     where id=".$id;
    echo $statement;
    $update_parent = $connect->query($statement);

    if($update_parent){
      echo "<script>alert('Sucessfully  updated!')</script>";

	      echo "<script>window.open('parents.php','_self')</script>";
    }
}
?>

<div id="page-wrapper">
  <div class="main-page">
    <div class="forms">
      <h2 class="title1">Forms</h2>
      <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Edit parent:</h4>
        </div>
        <form action="" method="post">
         <fieldset>
              <span class="FieldInfo">First Name:</span>
              <br>
              <input type="text" name="FName" value=<?php echo $editparent['first_name']; ?>>
              <br>
              <span class="FieldInfo">Middle Name:</span><br>
              <input type="text" name="MName" value=<?php echo $editparent['middle_name']; ?>>
              <br>
              <span class="FieldInfo">Last Name:</span><br>
              <input type="text" name="LName" value=<?php echo $editparent['last_name']; ?>>
              <br>
              <span class="FieldInfo">Student Id:</span><br>
              <input type="text" name="TutorId" value=<?php echo $editparent['student_id']; ?>>
              <br>
              <span class="FieldInfo">Email:</span><br>
              <input type="text" name="Email" value=<?php echo $editparent['email']; ?>>
              <br>
              <span class="FieldInfo">Password:</span><br>
              <input type="text" name="Password" value=<?php echo $editparent['password']; ?>>
              <br>
              <span class="FieldInfo">Phone Number:</span><br>
              <input type="text" name="PhoneNum" value=<?php echo $editparent['phone_num']; ?>>
              <br>
              <span class="FieldInfo">Address:</span><br>
              <input type="text" name="Address" value=<?php echo $editparent['address']; ?>>
              <br>


              <input type="text" name="EditedId" value="<?php echo $ID ?>"/>
              <br>
              <input type="submit" name="SubmitUpdate" value="Update">
              <br>
          </fieldset>
  </form>
          <a href="parents.php" class="btn">Back</a>
      </div>
    </div>
  </div>
</div>



<?php include 'footer.php'; ?>
