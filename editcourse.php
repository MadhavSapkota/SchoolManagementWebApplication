<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';
if(isset($_GET['id'])){
    $ID=$_GET['id'];

    $edit = $connect->query("SELECT * FROM courses_record where course_id='$ID'");
    foreach($edit as $editcourse);
    //
    // $id = $editcourse['id'];
}
?>

<?php

if(isset($_POST['SubmitUpdate'])){

    $id = $_POST['EditedId'];
    echo $id;

    $CourseName = $_POST['CourseName'];
    $CourseCode = $_POST['CourseCode'];


    $statement="update courses_record set course_name='".$CourseName."', course_code='".$CourseCode."' where course_id=".$id;
    echo $statement;
    $update_course = $connect->query($statement);

    if($update_course){
      echo "<script>alert('".$CourseName." has been updated!')</script>";
	    
	      echo "<script>window.open('courses.php','_self')</script>";
    }
}
?>

<div id="page-wrapper">
  <div class="main-page">
    <div class="forms">
      <h2 class="title1">Forms</h2>
      <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Edit Course:</h4>
        </div>
        <form action="" method="post">
         <fieldset>
              <span class="FieldInfo">Course Name:</span>
              <br>
              <input type="text" name="CourseName" value=<?php echo $editcourse['course_name']; ?>>
              <br>
              <span class="FieldInfo">Course Code:</span><br>
              <input type="text" name="CourseCode" value=<?php echo $editcourse['course_code']; ?>>
              <br>
              <input type="text" name="EditedId" value="<?php echo $ID ?>"/>
              <br>
              <input type="submit" name="SubmitUpdate" value="Update">
              <br>
          </fieldset>
  </form>
          <a href="courses.php" class="btn">Back</a>
      </div>
    </div>
  </div>
</div>



<?php include 'footer.php'; ?>
