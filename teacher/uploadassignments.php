
<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subheader.php';

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
              <th>Description</th>
              <th>Document Name</th>
              <th>Date</th>

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
                    echo '<th>'.$assignment['description'].'</th>';
                    echo '<th>'.$assignment['document_name'].'</th>';
                    echo '<th>'.$assignment['date'].'</th>';

                  echo'</tr>';
                }
              }
              else{
                error('No modules.');
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
