<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';
if(isset($_GET['id'])){
    $ID=$_GET['id'];

    $edit = $connect->query("SELECT * FROM attendance_record where id='$ID'");
    foreach($edit as $editattendance);

}
?>

<?php

if(isset($_POST['SubmitUpdate'])){

    $id = $_POST['EditedId'];
    echo $id;

    $MoCode = $_POST["MoCode"];
    $Title = $_POST["Title"];
    $Description = $_POST["Description"];
    $Document_name = $_POST["Document_name"];
    $Date = $_POST["Date"];


    $statement="update attendances_record set module_code='".$MoCode."', title='".$Title."', description='".$Description."',
     document_name='".$Document_name."',data='".$Date."'where id=".$id;
    echo $statement;
    $update_attendance = $connect->query($statement);

    if($update_attendance){
      echo "<script>alert('updated! Successfully')</script>";

	      echo "<script>window.open('attendance.php','_self')</script>";
    }
}
?>

<div id="page-wrapper">
  <div class="main-page">
    <div class="forms">
      <h2 class="title1">Forms</h2>
      <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Edit attendances:</h4>
        </div>
        <form action="" method="post">
         <fieldset>
              <span class="FieldInfo">Module Code:</span><br>
              
              <input type="text" name="MoCode" value=<?php echo $editattendance['module_code']; ?>>
              <br>

              <span class="FieldInfo">Title:</span><br>
              <input type="text" name="Title" value=<?php echo $editattendance['title']; ?>>
              <br>
              <span class="FieldInfo">Description:</span><br>
              <input type="text" name="Description" value=<?php echo $editattendance['description']; ?>>
              <br>
              <span class="FieldInfo">Document_name:</span><br>
              <input type="text" name="Document_name" value=<?php echo $editattendance['document_name']; ?>>
              <br>
              <span class="FieldInfo">Date:</span><br>
              <input type="date" name="Date" value=<?php echo $editattendance['date']; ?>>
              <br>
              <input type="text" name="EditedId" value="<?php echo $ID ?>"/>
              <br>
              <input type="submit" name="SubmitUpdate" value="Update">
              <br>
          </fieldset>
  </form>
          <a href="attendance.php" class="btn">Back</a>
      </div>
    </div>
  </div>
</div>



<?php include 'footer.php'; ?>
