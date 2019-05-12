<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subheader.php';

  
if(isset($_POST['file_name'])){
$file = $_POST['file_name'];//add your own validation here.
  header("Content-Type: images/png; "); 
  header("Content-Transfer-Encoding: binary"); 
  header("Content-Length: ". filesize($filename).";"); 
  header("Content-disposition: attachment; filename=" . $filename);
  readfile($filename);
  exit();
}


  $assignmentRecord = $connect->prepare("SELECT * From assignments_record ");
  $assignmentRecord->execute();
  $assignments = $assignmentRecord->fetchAll();

?>
<div id="page-wrapper">
  <div class="main-page">
    <div class="tables">
      <h2 class="title1">Assignment Records</h2>
      <div class="panel-body widget-shadow">
        <h4>Year: <?php echo '2018' ?> </h4>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Module Code</th>
              <th>Title</th>
              <th>File</th>
              <th>Document Name</th>
              <th>Date</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>

              <?php
              if(count($assignments) > 0){
                foreach ($assignments as $assignment) {
                  echo '<tr>';
                    echo '<th scope="row">'.$assignment['id'].'</th>';
                    echo '<th>'.$assignment['module_code'].'</th>';
                    echo '<th>'.$assignment['title'].'</th>';
                    echo '<th>'."<a href='assignment.php?id=".$assignment['file']."'>Download</a>".'</th>';
                    echo '<th>'.$assignment['document_name'].'</th>';
                    echo '<th>'.$assignment['date'].'</th>';
                    echo '<th>'."<a href='editassignment.php?id=".$assignment['id']."'>Edit</a>".'</th>';
                   echo '<th>'."<a href='deleteassignment.php?id=".$assignment['id']."'>Delete</a>".'</th>';

                  echo'</tr>';
                }
              }
              else{
                echo ' No Assignments Found';
              }
            ?>
          </tbody>
        </table>
      </div>
        <a href="addassignment.php"><button style="margin: 25px;height: 50px;width: 170px">Add More Assignment</button></a>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
