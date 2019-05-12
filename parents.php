<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subheader.php';

  $ViewQuery = $connect->prepare("SELECT * From parents_record ");
  $ViewQuery->execute();
  $parents = $ViewQuery->fetchAll();

?>
<div id="page-wrapper">
  <div class="main-page">
    <div class="tables">
      <h2 class="title1">Parents</h2>
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
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

              <?php
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
                    echo '<th>'."<a href='editparent.php?id=".$parent['id']."'>Edit</a>".'</th>';
                   echo '<th>'."<a href='deleteparent.php?id=".$parent['id']."'>Delete</a>".'</th>';
                  echo'</tr>';
                }
              }
              else{
                error('No Parents.');
              }
            ?>
          </tbody>
        </table>
      </div>
        <a href="addparent.php"><button style="margin: 25px;height: 30px;width: 145px">Add More Parent</button></a>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
