<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subheader.php';
 session_start();
  if(!empty($_SESSION['login_teacher']))
  {
    $tutor_id=$_SESSION['login_teacher'];

    $query = "SELECT * From teachers_record where tutor_id=".$tutor_id;
    $ViewQuery = $connect->prepare($query);
    $ViewQuery->execute();
    $teachers = $ViewQuery->fetchAll();

}
?>

<div id="page-wrapper">
  <div class="main-page">
    <div class="tables">
      <h2 class="title1">Teachers</h2>
      <div class="panel-body widget-shadow">
        <h4>Year: <?php echo '2018' ?> </h4>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Phone Number</th>
              <th>Subject</th>
              <th>About</th>
              <th>Course Code</th>
            </tr>
          </thead>
          <tbody>

              <?php
                if(!empty($_SESSION['login_teacher'])){
              if(count($teachers) > 0){
                foreach ($teachers as $teacher) {
                  echo '<tr>';
                    echo '<th scope="row">'.$teacher['tutor_id'].'</th>';
                    echo '<th>'.$teacher['first_name'].'</th>';
                    //echo '<th>'.$teacher['middle_name'].'</th>';
                    echo '<th>'.$teacher['last_name'].'</th>';
                    echo '<th>'.$teacher['email'].'</th>';
                    echo '<th>'.$teacher['address'].'</th>';
                    echo '<th>'.$teacher['phone_num'].'</th>';
                    echo '<th>'.$teacher['subject'].'</th>';
                    echo '<th>'.$teacher['about'].'</th>';
                    echo '<th>'.$teacher['course_code'].'</th>';
                  echo'</tr>';
                }
              }
            }
              else{
                echo ' No Teacher Found';
              }
            ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
