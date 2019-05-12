<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';

  if(isset($_POST["Submit"])){
	if(!empty($_POST["MoCode"])&&!empty($_POST["Title"])){

    		$MoCode = $_POST["MoCode"];
    		$Title = $_POST["Title"];
    		$Description = $_POST["Description"];
    		$Document_name = $_POST["Document_name"];
        $Date = $_POST["Date"];
        $File = $_POST["product_image"];
        //$Docum = $_POST["Docum"];

        $product_image = $_FILES['product_image']['name'];
		 $product_image_tmp = $_FILES['product_image']['tmp_name'];

		 move_uploaded_file($product_image_tmp,'images/$product_image');



        $insertAss = "INSERT INTO assignments_record(module_code,title,description,document_name,date,file)
        VALUES('".$MoCode."','".$Title."','".$Description."','".$Document_name."','".$Date."','".$File."')";

		$connect->exec($insertAss);
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
          <h4>Add Assignment :</h4>
        </div>
        <form action="addassignment.php" method="Post" enctype="multipart/form-data>
       <fieldset>
      
        
          <span class="FieldInfo">Title:</span><br><input type="text" name="Title" value=""><br>
          <span class="FieldInfo">Description:</span><br><input type="text" name="Description" value=""><br>
          <span class="FieldInfo">Document Name:</span><br><input type="text" name="Document_name" value=""><br>
          <span class="FieldInfo">Date:</span><br><input type="date" name="Date" value=""><br>
           <span class="FieldInfo">File:</span><input type="file" name="product_image"/><br>
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
