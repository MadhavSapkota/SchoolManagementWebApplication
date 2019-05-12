<?php
 session_start();
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';


if(!empty($_SESSION['login_student']))
{
  $course_id=$_SESSION['login_student'];
  echo $student_id;
  $query="SELECT * From courses_record where course_id=".$course_id;
  echo $query;
  $ViewQuery = $connect->prepare($query);
  $ViewQuery->execute();
  $courses = $ViewQuery->fetchAll();
}


  ?>
  <div id="page-wrapper">
  <div class="main-page">
    <div class="tables">
      <h2 class="title1">Courses</h2>
      <div class="panel-body widget-shadow">
        <h4>Year: <?php echo '2018' ?> </h4>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Course Name</th>
              <th>Course Code</th>
             

            </tr>
          </thead>
          <tbody>

              <?php
              if(!empty($_SESSION['login_student'])){
                foreach ($courses as $course) {
                  echo '<tr>';
                    echo '<th scope="row">'.$course['course_id'].'</th>';
                    echo '<th>'.$course['course_name'].'</th>';
                    echo '<th>'.$course['course_code'].'</th>';
                  


                  echo'</tr>';
                }
              }
              else{
                echo "No Course Found";;
              }
            ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
  </div>

<?php include 'footer.php'; ?>
