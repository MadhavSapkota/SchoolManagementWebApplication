<?php

session_start();
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';


   if(!isset($_SESSION['admin']))
   {
     header('location: login.php');
   }
if(isset($_POST["Submit"])){
if(!empty($_POST["MoCode"])&&!empty($_POST["Title"])){

      $MoCode = $_POST["MoCode"];
      $SID = $_POST["SID"];
      $Title = $_POST["Title"];
      $Description = $_POST["Description"];
      $Document_name = $_POST["Document_name"];
      $Date = $_POST["Date"];
      $File = $_POST["product_file"];
      //$Docum = $_POST["Docum"];

      $product_file = $_FILES['product_file']['name'];
   $product_file_tmp = $_FILES['product_file']['tmp_name'];

   move_uploaded_file($product_file_tmp,'images/$product_file');
     
      $insertAttendance = "INSERT INTO attendance_record(module_code,student_id,title,description,document_name,date,file)
      VALUES('".$MoCode."','".$SID."','".$Title."','".$Description."','".$Document_name."','".$Date."','".$File."')";

  $connect->exec($insertAttendance);
    echo 'New Record inserted';

}
else{
  echo '<span class="FieldInfoHeading">Please fill Atleast Module code and Title</span>';
}
}
?>

<div id="page-wrapper">
<div class="main-page">
  <div class="forms">
    <h2 class="title1">Forms</h2>
    <div class="form-grids row widget-shadow" data-example-id="basic-forms">
      <div class="form-title">
        <h4>Add Attendance :</h4>
      </div>
      <form action="addattendance.php" method="Post" enctype="multipart/form-data>
     <fieldset>



     
       <span class="FieldInfo">Student Id:</span><br>
       <select name="SID">
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
        <span class="FieldInfo">Title:</span><br><input type="text" name="Title" value=""><br>
        <span class="FieldInfo">Description:</span><br><input type="text" name="Description" value=""><br>
        <span class="FieldInfo">Document Name:</span><br><input type="text" name="Document_name" value=""><br>
        <span class="FieldInfo">Date:</span><br><input type="date" name="Date" value=""><br>
         <span class="FieldInfo">File:</span><input type="file" name="product_file"/><br>
         <select name="MoCode">
            <option>Select Module Code</option>
            <?php

            include 'connect.php';
               $get_brands = $connect->query("select * from modules_record");
                 foreach($get_brands as $row_cats){
                  $brand_id = $row_cats['module_id'];
                 $brand_title = $row_cats['module_code'];

                 echo "<option value='".$brand_title."'>".$brand_title."</option>";  //option value="brand_id"//
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
