<?php
session_start();
  include 'header.php';
  include 'sidebar.php';
  include 'subheader.php';

if(!empty($_SESSION['login_student']))
  {
    $id=$_SESSION['login_student'];
  $attendanceRecord = $connect->prepare("SELECT * From attendance_record");
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
              <th>Title</th>
              <th>Description</th>
              <th>Document Name</th>
              <th>Date</th>


            </tr>
          </thead>
          <tbody>

              <?php
               if(!empty($_SESSION['login_student'])){
              if(count($attendances) > 0){
                foreach ($attendances as $attendance) {
                  echo '<tr>';
                    echo '<th scope="row">'.$attendance['id'].'</th>';
                    echo '<th>'.$attendance['module_code'].'</th>';
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
