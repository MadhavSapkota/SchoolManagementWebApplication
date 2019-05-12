<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';

  if(isset($_POST["Submit"])){
	if(!empty($_POST["MoName"])&&!empty($_POST["MCode"])){

    		$MoName = $_POST["MoName"];
    		$MCode = $_POST["MCode"];
    		$CId = $_POST["CId"];
    		$TId = $_POST["TId"];


        $insertModule = "INSERT INTO modules_record(module_name,module_code,course_id,tutor_id)
        VALUES('".$MoName."','".$MCode."','".$CId."','".$TId."')";

		$connect->exec($insertModule);
      echo 'New Record inserted';

	}
	else{
		echo '<span class="FieldInfoHeading">Please fill Atleast Module code and Module Name</span>';
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
        <form action="addmodule.php" method="Post">
       <fieldset>
         <span class="FieldInfo">Module Name:</span><br><input type="text" name="MoName" value=""><br>
          <span class="FieldInfo">Module Code:</span><br><input type="text" name="MCode" value=""><br>
          <span class="FieldInfo">Course Id:</span><br>
          <select name="CId">
            <option>Select Course</option>
            <?php
              include 'connect.php';
               $get_brands = $connect->query("select * from courses_record");
               foreach($get_brands as $row_cats){
                 $brand_id = $row_cats['course_id'];
                 $brand_title = $row_cats['course_name'];

                 echo "<option value='".$brand_id."'>".$brand_title."</option>";  //option value="brand_id"//
               }
           ?>
         </select><br>
          <span class="FieldInfo">Tutor Id:</span><br>
          <select name="TId">
            <option>Select Teacher</option>
            <?php
              include 'connect.php';
               $get_tutor = $connect->query("select * from teachers_record");
               foreach($get_tutor as $row_tutor){
                 $tutor_id = $row_tutor['tutor_id'];
                 $tutor_title = $row_tutor['first_name'];

                 echo "<option value='".$tutor_id."'>".$tutor_title."</option>";  //option value="brand_id"//
               }
           ?>
         </select><br>


    <br>
        <input type="Submit" name="Submit" value="Submit Your Record"><br>


          </fieldset>

         </form>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
