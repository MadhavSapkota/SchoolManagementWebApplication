<?php
   session_start();
  include 'header.php';
  include 'sidebar.php';
  include 'subheader.php';


  if(!empty($_SESSION['login_parent']))
  {
    $id=$_SESSION['login_parent'];

    $query = "SELECT * From parents_record where id=".$id;
    $ViewQuery = $connect->prepare($query);
    $ViewQuery->execute();
    $parents = $ViewQuery->fetchAll();

}
?>

<div id="page-wrapper">
  <div class="main-page">
    <div class="tables">
      <h2 class="title1">parents</h2>
      <div class="panel-body widget-shadow">
        <h4>Year: <?php echo '2018' ?> </h4>
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
              <th>Student Id</th>

            </tr>
          </thead>
          <tbody>

              <?php
                if(!empty($_SESSION['login_parent'])){
              if(count($parents) > 0){
                foreach ($parents as $parent) {
                  echo '<tr>';
                    echo '<th scope="row">'.$parent['id'].'</th>';
                    echo '<th>'.$parent['first_name'].'</th>';
                    echo '<th>'.$parent['middle_name'].'</th>';
                    echo '<th>'.$parent['last_name'].'</th>';
                    echo '<th>'.$parent['email'].'</th>';
                    echo '<th>'.$parent['address'].'</th>';
                    echo '<th>'.$parent['phone_num'].'</th>';
                    echo '<th>'.$parent['student_id'].'</th>';

                  echo'</tr>';
                }
              }
            }
              else{
                echo ' no parent found ';
              }
            ?>
          </tbody>
        </table>
      </div>
      
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
