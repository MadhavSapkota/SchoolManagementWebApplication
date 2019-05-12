<?php
 session_start();
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';


if(!empty($_SESSION['login_student']))
{
  $student_id=$_SESSION['login_student'];
  echo $student_id;
  $query="SELECT * From students_record where student_id=".$student_id;
  echo $query;
  $ViewQuery = $connect->prepare($query);
  $ViewQuery->execute();
  $students = $ViewQuery->fetchAll();
}


  ?>
  <div id="page-wrapper">
  <div class="main-page">
    <div class="tables">
      <h2 class="title1">Students</h2>
      <div class="panel-body widget-shadow">
        <h4>Course Code: <?php echo '111' ?> </h4>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Phone Number</th>
              <th>Course Code</th>

            </tr>
          </thead>
          <tbody>

              <?php
              if(!empty($_SESSION['login_student'])){
                foreach ($students as $student) {
                  echo '<tr>';
                    echo '<th scope="row">'.$student['student_id'].'</th>';
                    echo '<th>'.$student['first_name'].'</th>';
                    echo '<th>'.$student['middle_name'].'</th>';
                    echo '<th>'.$student['last_name'].'</th>';
                    echo '<th>'.$student['email'].'</th>';
                    echo '<th>'.$student['address'].'</th>';
                    echo '<th>'.$student['phone_num'].'</th>';
                    echo '<th>'.$student['course_code'].'</th>';


                  echo'</tr>';
                }
              }
              else{
                echo "No Student Found";;
              }
            ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
  </div>

<?php include 'footer.php'; ?>
