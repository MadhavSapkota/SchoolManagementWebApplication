<?php
  session_start();
  include 'header.php';
  include 'sidebar.php';
  include 'subheader.php';

  if(!empty($_SESSION['login_teacher']))
  {
    $course_id=$_SESSION['login_teacher'];

    $query = "SELECT * From courses_record where course_id=".$course_id;
    $ViewQuery = $connect->prepare($query);
    $ViewQuery->execute();
    $teachers = $ViewQuery->fetchAll();

}
?>

<div id="page-wrapper">
  <div class="main-page">
    <div class="tables">
      <h2 class="title1">Course Details</h2>
      <div class="panel-body widget-shadow">
        <h4>Year: <?php echo '2018' ?> </h4>
        <table class="table">
          <thead>
            <tr>
              <th>Course_Id</th>
              <th>Course Name</th>
              <th>Course Code</th>

            </tr>
          </thead>
          <tbody>

              <?php
                if(!empty($_SESSION['login_teacher'])){
              if(count($teachers) > 0){
                foreach ($teachers as $teacher) {
                  echo '<tr>';
                    echo '<th scope="row">'.$teacher['course_id'].'</th>';
                    echo '<th>'.$teacher['course_name'].'</th>';
                    echo '<th>'.$teacher['course_code'].'</th>';

                  echo'</tr>';
                }
              }
            }
              else{
                echo ' No course Found';
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
