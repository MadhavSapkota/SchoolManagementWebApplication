<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';

  if(isset($_POST["Submit"])){
	if(!empty($_POST["CourseName"])&&!empty($_POST["CourseCode"])){

		$CourseName = $_POST["CourseName"];
		$CourseCode = $_POST["CourseCode"];


		$pdoQuery = "INSERT INTO courses_record(course_name,course_code)
        VALUES('".$CourseName."','".$CourseCode."')";

		$connect->exec($pdoQuery);
      echo 'New Record inserted';

	}
	else{
		echo '<span class="FieldInfoHeading">Please Atleast coursename and coursecode</span>';
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
        <form action="addcourse.php" method="Post">
	       <fieldset>
            <span class="FieldInfo">Course Name:</span><br><input type="text" name="CourseName" value=""><br>
             <span class="FieldInfo">Course Code:</span><br><input type="text" name="CourseCode" value=""><br>

        <br>
              <input type="Submit" name="Submit" value="Submit Your Record"><br>


</fieldset>

        </form>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
