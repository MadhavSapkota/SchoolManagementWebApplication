<?php
session_start();
  include 'header.php';
  include 'sidebar.php';
  include 'subheader.php';


  if(!empty($_SESSION['login_student']))
  {
    $id=$_SESSION['login_student'];

  $viewResult = $connect->prepare("SELECT * From students_grade where id=$id");
  $viewResult->execute();
  $results = $viewResult->fetchAll();
}
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


            </tr>
          </thead>
          <tbody>

              <?php
              if(!empty($_SESSION['login_student'])){
              if(count($results) > 0){
                foreach ($results as $result) {
                  echo '<tr>';
                    echo '<th scope="row">'.$result['id'].'</th>';
                    echo '<th>'.$result['module_code'].'</th>';
                    echo '<th>'.$result['acessment_code'].'</th>';
                    echo '<th>'.$result['student_id'].'</th>';
                    echo '<th>'.$result['grade'].'</th>';
                    echo '<th>'.$result['description'].'</th>';


                  echo'</tr>';
                }
              }
            }
              else{
                
                echo "No Result Found!!";
              }
            ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
