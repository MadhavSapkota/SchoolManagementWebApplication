<?php
session_start();
  include 'header.php';
  include 'sidebar.php';
  include 'subheader.php';

  if(!empty($_SESSION['login_parent']))
  {
    $id = $_SESSION['login_parent'];
  $attendanceRecord = $connect->prepare("SELECT ar.id, ar.module_code, ar.student_id, ar.title, ar.description, ar.document_name, ar.date, ar.file From parents_record pr 
  JOIN students_record sr ON  pr.student_id = sr.student_id JOIN attendance_record ar ON sr.student_id = ar.student_id where pr.id=$id");
  $attendanceRecord->execute();
  $attendances = $attendanceRecord->fetchAll();
}
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


            </tr>
          </thead>
          <tbody>

              <?php
              if(!empty($_SESSION['login_parent']))
              {
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


                  echo'</tr>';
                }
              }
            }
              else{
                echo ' No attendances Found';
              }
            ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
