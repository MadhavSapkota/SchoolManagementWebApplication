<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subheader.php';

  $viewResult = $connect->prepare("SELECT * From students_grade");
  $viewResult->execute();
  $results = $viewResult->fetchAll();

?>
<div id="page-wrapper">
  <div class="main-page">
    <div class="tables">
      <h2 class="title1">Students Grade</h2>
      <div class="panel-body widget-shadow">
        <h4>Year: <?php echo '2018' ?> </h4>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Module Code</th>
              <th>Acessment Code</th>
              <th>Student Id</th>
              <th>Grade</th>
              <th>Description</th>
              <th>Action</br>

            </tr>
          </thead>
          <tbody>

              <?php
              if(count($results) > 0){
                foreach ($results as $result) {
                  echo '<tr>';
                    echo '<th scope="row">'.$result['id'].'</th>';
                    echo '<th>'.$result['module_code'].'</th>';
                    echo '<th>'.$result['acessment_code'].'</th>';
                    echo '<th>'.$result['student_id'].'</th>';
                    echo '<th>'.$result['grade'].'</th>';
                    echo '<th>'.$result['description'].'</th>';
                    echo '<th>'."<a href='editresult.php?id=".$result['id']."'>Edit</a>".'</th>';
                   echo '<th>'."<a href='deleteresult.php?id=".$result['id']."'>Delete</a>".'</th>';

                  echo'</tr>';
                }
              }
              else{
                error('No results.');
              }
            ?>
          </tbody>
        </table>
      </div>
        <a href="addresult.php"><button style="margin: 25px;height: 30px;width: 145px">Add More Result</button></a>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
