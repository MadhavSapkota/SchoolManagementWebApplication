<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subheader.php';

  $selectCourse = $connect->prepare("SELECT * From courses_record ");
  $selectCourse->execute();
  $courses = $selectCourse->fetchAll();

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

              <th>Action</th>

            </tr>
          </thead>
          <tbody>

              <?php
              if(count($courses) > 0){
                foreach ($courses as $course) {
                  echo '<tr>';
                    echo '<th scope="row">'.$course['course_id'].'</th>';
                    echo '<th>'.$course['course_name'].'</th>';
                    echo '<th>'.$course['course_code'].'</th>';
                    echo '<th>'."<a href='editcourse.php?id=".$course['course_id']."'>Edit</a>".'</th>';
                   echo '<th>'."<a href='deletecourse.php?course_id=".$course['course_id']."'>Delete</a>".'</th>';




                  echo'</tr>';
                }
              }
              else{
                error('No Course.');
              }
            ?>
          </tbody>
        </table>
      </div>
        <a href="addcourse.php"><button style="margin: 25px;height: 30px;width: 145px">Add More Course</button></a>

    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
