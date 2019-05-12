<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';
if(isset($_GET['id'])){
    $ID=$_GET['id'];

    $edit = $connect->query("SELECT * FROM students_grade where id='$ID'");
    foreach($edit as $editgrade);

}
?>

<?php

if(isset($_POST['SubmitUpdate'])){

    $id = $_POST['EditedId'];



    $MoCode = $_POST["MoCode"];
    $Acessment_code = $_POST["Acessment_code"];
    $SID = $_POST["SID"];
    $Grade = $_POST["Grade"];
    $Description = $_POST["Description"];


    $statement="Update students_grade set module_code=$MoCode,acessment_code=$Acessment_code,student_id=$SID,
    grade=$Grade,description=$Description where id=$id";
    echo $statement;
    
    $update_grade = $connect->query($statement);

    if($update_grade){

      echo "<script>alert('updated! Successfully')</script>";

	      echo "<script>window.open('result.php','_self')</script>";
    }
}
?>

<div id="page-wrapper">
  <div class="main-page">
    <div class="forms">
      <h2 class="title1">Forms</h2>
      <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Edit Results:</h4>
        </div>
        <form action="" method="post">
         <fieldset>

              <span class="FieldInfo">Module Code:</span><br>
              <input type="text" name="MoCode" value=<?php echo $editgrade['module_code']; ?>>
              <br>
              <span class="FieldInfo">Acessment Code:</span><br>
              <input type="text" name="Acessment_code" value=<?php echo $editgrade['acessment_code']; ?>>
              <br>
              <span class="FieldInfo">Student Id:</span><br>
              <input type="text" name="SID" value=<?php echo $editgrade['student_id']; ?>>
              <br>
              <span class="FieldInfo">Grade:</span><br>
              <input type="text" name="Grade" value=<?php echo $editgrade['grade']; ?>>
              <br>
              <span class="FieldInfo">Description:</span><br>
              <input type="text" name="Description" value=<?php echo $editgrade['description']; ?>>
              <br>
              <input type="text" name="EditedId" value="<?php echo $ID ?>"/>
              <br>
              <input type="submit" name="SubmitUpdate" value="Update">
              <br>
          </fieldset>
  </form>
          <a href="results.php" class="btn">Back</a>
      </div>
    </div>
  </div>
</div>



<?php include 'footer.php'; ?>
