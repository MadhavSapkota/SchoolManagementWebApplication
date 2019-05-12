<?php
session_start();

if(!isset($_SESSION['admin']))
{
  header('location: login.php');
}
if(isset($_GET['logout']))
{
   unset($_SESSION['admin']);
   unset($_SESSION['login_std_cc']);
   
 	header('location: login.php');
}

  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';
if(isset($_GET['id'])){
    $ID=$_GET['id'];

    $edit = $connect->query("SELECT * FROM contents_record where id='$ID'");
    foreach($edit as $editcontent);

}
?>

<?php

if(isset($_POST['SubmitUpdate'])){

    $id = $_POST['EditedId'];
    echo $id;

    $CID = $_POST["CID"];
    $MoCode = $_POST["MoCode"];
    $Chapter = $_POST["Chapter"];
    $Description = $_POST["Description"];
    $Video = $_POST["Video"];
    $Link = $_POST["Link"];


    $statement="update contents_record set course_id='".$CID."',module_code='".$MoCode."', chapter='".$Chapter."', description='".$Description."',
     video='".$Video."',link='".$Link."' where course_id=".$id;
    echo $statement;
    $update_content = $connect->query($statement);

    if($update_content){
      echo "<script>alert('updated! Successfully')</script>";

	      echo "<script>window.open('modulecontent.php','_self')</script>";
    }
}
?>

<div id="page-wrapper">
  <div class="main-page">
    <div class="forms">
      <h2 class="title1">Forms</h2>
      <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Edit Contents:</h4>
        </div>
        <form action="" method="post">
         <fieldset>
              <span class="FieldInfo">Course Id:</span><br>
              
              <input type="text" name="CID" value=<?php echo $editcontent['course_id']; ?>>
              <br>
              <span class="FieldInfo">Module Code:</span><br>
              
              <input type="text" name="MoCode" value=<?php echo $editcontent['module_code']; ?>>
              <br>

              <span class="FieldInfo">Chapter:</span><br>
              <input type="text" name="Chapter" value=<?php echo $editcontent['chapter']; ?>>
              <br>
              <span class="FieldInfo">Description:</span><br>
              <input type="text" name="Description" value=<?php echo $editcontent['description']; ?>>
              <br>
              <span class="FieldInfo">video:</span><br>
              <input type="text" name="Video" value=<?php echo $editcontent['video']; ?>>
              <br>
              <span class="FieldInfo">link:</span><br>
              <input type="text" name="Link" value=<?php echo $editcontent['link']; ?>>
              <br>
             
              <input type="text" name="EditedId" value="<?php echo $ID ?>"/>
              <br>
              <input type="submit" name="SubmitUpdate" value="Update">
              <br>
          </fieldset>
  </form>
          <a href="modulecontent.php" class="btn">Back</a>
      </div>
    </div>
  </div>
</div>



<?php include 'footer.php'; ?>
