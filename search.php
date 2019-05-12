<?php
    session_start();

    if(!isset($_SESSION['admin']))
    {
      header('location: login.php');
    }
    if(isset($_GET['logout']))
    {
       unset($_SESSION['admin']);
       unset($_SESSION['login_std_cc']);
       
       header('location: login.php');
    }

    include 'header.php';
    include 'sidebar.php';
    include 'subheader.php';

  if(isset($_GET['search'])){
    $value = $_GET['search'];
    echo $value; 
    $ViewQuery = $connect->prepare("SELECT * From students_record WHERE first_name='".$value."'");

    $ViewQuery->execute();
    $students = $ViewQuery->fetchAll();

    if(count($students) < 1){
        $ViewQuery = $connect->prepare("SELECT * From students_record WHERE last_name='".$value."'");
        
        $ViewQuery->execute();
        $students = $ViewQuery->fetchAll();
    }
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
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

              <?php
              if(count($students) > 0){
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
                    echo '<th>'."<a href='editstudent.php?id=".$student['student_id']."'>Edit</a>".'</th>';
                   echo '<th>'."<a href='deletestudent.php?student_id=".$student['student_id']."'>Delete</a>".'</th>';

                  echo'</tr>';
                }
              }
              else{
                echo ' No student Found ';
              }
            ?>
          </tbody>
        </table>
      </div>
        <a href="addstudent.php"><button style="margin: 25px;height: 30px;width: 145px">Add More Student</button></a>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
