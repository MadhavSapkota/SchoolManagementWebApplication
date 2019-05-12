<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';
if(isset($_GET['id'])){
    $ID=$_GET['id'];

    $edit = $connect->query("SELECT * FROM modules_record where module_id='$ID'");
    foreach($edit as $editmodule);

}
?>

<?php
//include 'connect.php';
if(isset($_POST['SubmitUpdate'])){

    $id = $_POST['EditedId'];
    echo $id;

    $MoName = $_POST["MoName"];
    $MCode = $_POST["MCode"];
    $CId = $_POST["CId"];
    $TId = $_POST["TId"];


    $statement="update modules_record set module_name='".$MoName."', module_code='".$MoCode."', course_id='".$CId."', tutor_id='".$TId."' where module_id=".$id;
    echo $statement;
    $update_module = $connect->query($statement);

    if($update_module){
      echo "<script>alert('updated! Successfully')</script>";

	      echo "<script>window.open('modules.php','_self')</script>";
    }
}
?>

<div id="page-wrapper">
  <div class="main-page">
    <div class="forms">
      <h2 class="title1">Forms</h2>
      <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Edit Modules:</h4>
        </div>
        <form action="" method="post">
         <fieldset>
              <span class="FieldInfo">Module Name:</span>
              <br>
              <input type="text" name="MoName" value=<?php echo $editmodule['module_name']; ?>>
              <br>
              <span class="FieldInfo">Module Code:</span><br>
              <input type="text" name="MoCode" value=<?php echo $editmodule['module_code']; ?>>
              <br>
              <span class="FieldInfo">Course Id:</span><br>
              <input type="text" name="CId" value=<?php echo $editmodule['course_id']; ?>>
              <br>
              <span class="FieldInfo">Tutor Id:</span><br>
              <input type="text" name="TId" value=<?php echo $editmodule['tutor_id']; ?>>
              <br>
              <input type="text" name="EditedId" value="<?php echo $ID ?>"/>
              <br>
              <input type="submit" name="SubmitUpdate" value="Update">
              <br>
          </fieldset>
  </form>
          <a href="modules.php" class="btn">Back</a>
      </div>
    </div>
  </div>
</div>



<?php include 'footer.php'; ?>
