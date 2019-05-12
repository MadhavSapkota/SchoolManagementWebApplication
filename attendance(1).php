<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subheader.php';

  $attendanceRecord = $connect->prepare("SELECT * From attendance_record ");
  $attendanceRecord->execute();
  $attendances = $attendanceRecord->fetchAll();

?>
<div id="page-wrapper">
  <div class="main-page">
    <div class="tables">
      <h2 class="title1">Attendance Records</h2>
      <div class="panel-body widget-shadow">
        <h4>Year: <?php echo '2018' ?> </h4>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Module Code</th>
              <th>Student Id </th>
              <th>Title</th>
              <th>Description</th>
              <th>Document Name</th>
              <th>Date</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>

              <?php
              if(count($attendances) > 0){
                foreach ($attendances as $attendance) {
                  echo '<tr>';
                    echo '<th scope="row">'.$attendance['id'].'</th>';
                    echo '<th>'.$attendance['module_code'].'</th>';
                    echo '<th>'.$attendance['student_id'].'</th>';
                    echo '<th>'.$attendance['title'].'</th>';
                    echo '<th>'.$attendance['description'].'</th>';
                    echo '<th>'.$attendance['document_name'].'</th>';
                    echo '<th>'.$attendance['date'].'</th>';
                    echo '<th>'."<a href='editattendance.php?id=".$attendance['id']."'>Edit</a>".'</th>';
                   echo '<th>'."<a href='deleteattendance.php?id=".$attendance['id']."'>Delete</a>".'</th>';

                  echo'</tr>';
                }
              }
              else{
                echo ' No attendances Found';
              }
            ?>
          </tbody>
        </table>
      </div>
        <a href="addattendance.php"><button style="margin: 25px;height: 50px;width: 170px">Add More attendance</button></a>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
