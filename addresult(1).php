<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';

  if(isset($_POST["Submit"])){
	if(!empty($_POST["MoCode"])&&!empty($_POST["Grade"])){

    		$MoCode = $_POST["MoCode"];
    		$AcessmentCode = $_POST["AcessmentCode"];
    		$StudentId = $_POST["StudentId"];
    		$Grade = $_POST["Grade"];
        $Description = $_POST["Description"];

        $insertresult = "INSERT INTO students_grade(module_code,acessment_code,student_id,grade,description)
        VALUES('".$MoCode."','".$AcessmentCode."','".$StudentId."','".$Grade."','".$Description."')";

		$connect->exec($insertresult);
      echo 'New Record inserted';

	}
	else{
		echo '<span class="FieldInfoHeading">Please fill Atleast Module code and Grade</span>';
	}
}
?>

<div id="page-wrapper">
  <div class="main-page">
    <div class="forms">
      <h2 class="title1">Forms</h2>
      <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Add Grade :</h4>
        </div>
        <form action="addresult.php" method="Post">
       <fieldset>
         <span class="FieldInfo">Module Code:</span><br>
         <select name="MoCode">
            <option>Select Module Code</option><br>
            <?php

            include 'connect.php';
               $get_module = $connect->query("select * from modules_record");
                 foreach($get_module as $row_module){
                  $module_id = $row_module['module_id'];
                 $module_title = $row_module['module_code'];

                 echo "<option value='".$module_title."'>".$module_title."</option>";  //option value="brand_id"//
               }
              ?>
         </select><br>
          <span class="FieldInfo">Acessment Code:</span><br><input type="text" name="AcessmentCode" value=""><br>
          <span class="FieldInfo">Student Id:</span><br>
          <select name="StudentId">
            <option>Select Student</option><br>
            <?php
              include 'connect.php';
               $get_student = $connect->query("select * from students_record");
               foreach($get_student as $row_student){
                 $student_id = $row_student['student_id'];
                 $student_title = $row_student['first_name'];

                 echo "<option value='".$student_id."'>".$student_title."</option>";  //option value="brand_id"//
               }
           ?>
         </select><br>
          <span class="FieldInfo">Grade:</span><br><input type="text" name="Grade" value=""><br>
          <span class="FieldInfo">Description:</span><br><input type="text" name="Description" value=""><br>


    <br>
        <input type="Submit" name="Submit" value="Submit Your Record"><br>


          </fieldset>

         </form>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
