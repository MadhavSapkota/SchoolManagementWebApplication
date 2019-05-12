<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';
if(isset($_GET['id'])){
    $ID=$_GET['id'];

    $edit = $connect->query("SELECT * FROM events_record where event_id='$ID'");
    foreach($edit as $editevent);
    //
    // $id = $editevent['id'];
}
?>

<?php
//include 'connect.php';
if(isset($_POST['SubmitUpdate'])){

    $id = $_POST['EditedId'];
    echo $id;

    $Title = $_POST['Title'];
    $Date = $_POST['Date'];
    $Description = $_POST['Description'];

    $statement="update events_record set title='".$Title."', date='".$Date."', description='".$Description."' where event_id=".$id;
    echo $statement;
    $update_event = $connect->query($statement);

    if($update_event){
      echo "<script>alert('sucessfully updated!')</script>";
	    // echo "<script>alert('Category has been updated!')</script>";
	      echo "<script>window.open('events.php','_self')</script>";
    }
}
?>

<div id="page-wrapper">
  <div class="main-page">
    <div class="forms">
      <h2 class="title1">Forms</h2>
      <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Edit event:</h4>
        </div>
        <form action="" method="post">
         <fieldset>
              <span class="FieldInfo">Event Title:</span>
              <br>
              <input type="text" name="Title" value=<?php echo $editevent['title']; ?>>
              <br>
              <span class="FieldInfo">Event Date:</span><br>
              <input type="text" name="Date" value=<?php echo $editevent['date']; ?>>
              <br>
              <span class="FieldInfo">Description:</span><br>
              <textarea name="Description" cols="20" rows="10" value=<?php echo $editevent['description']; ?></textarea>

              <br>
              <input type="text" name="EditedId" value="<?php echo $ID ?>"/>
              <br>
              <input type="submit" name="SubmitUpdate" value="Update">
              <br>
          </fieldset>
  </form>
          <a href="events.php" class="btn">Back</a>
      </div>
    </div>
  </div>
</div>



<?php include 'footer.php'; ?>
