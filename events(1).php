<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';

  if(isset($_POST["Submit"])){
	if(!empty($_POST["Title"])&&!empty($_POST["Description"])){

		$Title = $_POST["Title"];
		$Date = $_POST["Date"];
    $Description = $_POST["Description"];


		$pdoQuery = "INSERT INTO events_record(title,date,description)
        VALUES('".$Title."','".$Date."','".$Description."')";

		$connect->exec($pdoQuery);
      echo 'New Record inserted';

	}
	else{
		echo '<span class="FieldInfoHeading">Please Atleast title and desc</span>';
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
        <form action="" method="Post">
	       <fieldset>
            <span class="FieldInfo">Event Title:</span><br><input type="text" name="Title" value=""><br>
             <span class="FieldInfo">Date:</span><br><input type="date" name="Date" value=""><br>
             <span class="FieldInfo">Description:</span><br>
             <textarea name="Description" cols="20" rows="10"></textarea><br>

        <br>
              <input type="Submit" name="Submit" value="Submit Your Record"><br>


</fieldset>

        </form>
      </div>
    </div>
  </div>
</div>



<?php


  $selectevent = $connect->prepare("SELECT * From events_record ");
  $selectevent->execute();
  $events = $selectevent->fetchAll();

?>
<div id="page-wrapper">
  <div class="main-page">
    <div class="tables">
      <h2 class="title1">events</h2>
      <div class="panel-body widget-shadow">
        <h4>Year: <?php echo '2018' ?> </h4>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Date</th>
              <th>Description</th>
              <th>Action</th>


            </tr>
          </thead>
          <tbody>

              <?php
              if(count($events) > 0){
                foreach ($events as $event) {
                  echo '<tr>';
                    echo '<th scope="row">'.$event['event_id'].'</th>';
                    echo '<th>'.$event['title'].'</th>';
                    echo '<th>'.$event['date'].'</th>';
                    echo '<th>'.$event['description'].'</th>';
                    echo '<th>'."<a href='editevent.php?id=".$event['event_id']."'>Edit</a>".'</th>';
                   echo '<th>'."<a href='deleteevent.php?event_id=".$event['event_id']."'>Delete</a>".'</th>';




                  echo'</tr>';
                }
              }
              else{
                echo ' No Events Found';
              }
            ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
