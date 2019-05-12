<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';

  if(isset($_POST["Submit"])){
	if(!empty($_POST["MoCode"])&&!empty($_POST["CId"])){
        $CId = $_POST["CId"];
    		$MoCode = $_POST["MoCode"];
    		$Chapter = $_POST["Chapter"];
    		$Video = $_POST["Video"];
    		
        $Description = $_POST["Description"];
        $Link = $_POST["Link"];

        $insertcontent = "INSERT INTO contents_record(course_id,module_code,chapter,video,description,link)
        VALUES('".$CId."','".$MoCode."','".$Chapter."','".$Video."','".$Description."','".$Link."')";

		$connect->exec($insertcontent);
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
          <h4>Add Content :</h4>
        </div>
        <form action="modulecontent.php" method="Post">
       <fieldset>
       <span class="FieldInfo">Course ID:</span><br>
         <select name="CId">
            <option>Select Course</option><br>
            <?php

            include 'connect.php';
               $get_course = $connect->query("select * from courses_record");
                 foreach($get_course as $course){
                  $course_id = $course['course_id'];
                 $course_title = $course['course_name'];

                 echo "<option value='".$course_title."'>".$course_title."</option>";  //option value="brand_id"//
               }
              ?>
         </select><br>
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

          <span class="FieldInfo">Chapter:</span><br><input type="text" name="Chapter" value=""><br>
          
          <span class="FieldInfo">Video:</span><br><input type="text" name="Video" value=""><br>
          <span class="FieldInfo">Description:</span><br><input type="text" name="Description" value=""><br>
          <span class="FieldInfo">Link:</span><br><input type="text" name="Link" value=""><br>
                              


    <br>
        <input type="Submit" name="Submit" value="Submit Your Record"><br>


          </fieldset>

         </form>
      </div>
    </div>
  </div>
</div>

 

<?php
  

  $viewContent = $connect->prepare("SELECT * From contents_record");
  $viewContent->execute();
  $contents = $viewContent->fetchAll();

?>
<div id="page-wrapper">
  <div class="main-page">
    <div class="tables">
      <h2 class="title1">Contents</h2>
      <div class="panel-body widget-shadow">
        <h4>Year: <?php echo '2018' ?> </h4>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              
              <th>Module</th>
              <th>Chapter</th>
              <th>Video</th>
              <th>Link</th>
              <th>Action</br>

            </tr>
          </thead>
          <tbody>

              <?php
              if(count($contents) > 0){
                foreach ($contents as $content) {
                  echo '<tr>';
                    echo '<th scope="row">'.$content['id'].'</th>';
                   
                    echo '<th>'.$content['module_code'].'</th>';
                    echo '<th>'.$content['chapter'].'</th>';
                    echo '<th>'.$content['video'].'</th>';
                    echo '<th>'.$content['link'].'</th>';
                    echo '<th>'."<a href='editcontent.php?id=".$content['id']."'>Edit</a>".'</th>';
                   echo '<th>'."<a href='deletecontent.php?id=".$content['id']."'>Delete</a>".'</th>';

                  echo'</tr>';
                }
              }
              else{
                error('No results.');
              }
            ?>
          </tbody>
        </table>
      </div>
        <a href="modulecontent.php"><button style="margin: 25px;height: 30px;width: 145px">Add More</button></a>
    </div>
  </div>
</div>


	<div id="page-wrapper">
			<div class="main-page general">
<div class="col-md-6 general-grids grids-right widget-shadow">
<h4 class="title2">Horizontal Tabs:</h4>
 <ul id="myTabs" class="nav nav-tabs" role="tablist">
	<li role="presentation" class="">
	 <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="false">Home</a></li>
		<li role="presentation" class="active">
    <div class="panel-body widget-shadow">
       
        <table class="table">
          <thead>
            <tr>
             
              <th>Chapter</th>
              <th>Video</th>
            

            </tr>
          </thead>
          <tbody>

              <?php
              if(count($contents) > 0){
                foreach ($contents as $content) {
                  echo '<tr>';
                    echo '<th scope="row">'.$content['id'].'</th>';
                   
                 
                    echo '<th>'.$content['chapter'].'</th>';
                    echo '<th>'.$content['video'].'</th>';
                   
                  echo'</tr>';
                }
              }
              else{
               echo "no content";
              }
            ?>
          </tbody>
        </table>
      </div>

		 <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Profile</a></li>
			<li role="presentation" class="dropdown"> 
			<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">Dropdown <span class="caret"></span></a> 
						<ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
						<li class=""><a href="#dropdown1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1" aria-expanded="false">@fat</a></li> <li class="">
						<a href="#dropdown2" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2" aria-expanded="false">@mdo</a></li> </ul> </li> </ul>
						<div id="myTabContent" class="tab-content scrollbar1"> <div role="tabpanel" class="tab-pane fade" id="home" aria-labelledby="home-tab"> 
						<p> salvia cillum iphone. .</p> </div> 
						<div role="tabpanel" class="tab-pane fade active in" id="profile" aria-labelledby="profile-tab">
						<p> tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p> 
						
						</div> <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab"> 
						<p>  yr.</p> </div> <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
						<p>.</p>
						</div> </div>
					</div>
          </div>
          </div>
<?php include 'footer.php'; ?>



