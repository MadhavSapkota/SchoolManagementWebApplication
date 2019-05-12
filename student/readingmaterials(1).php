<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';

  $viewContent = $connect->prepare("SELECT * From contents_record");
  $viewContent->execute();
  $contents = $viewContent->fetchAll();

?>
<div id="page-wrapper">
  <div class="main-page">
    <div class="tables">
      <h2 class="title1">Contents</h2>
      <div class="panel-body widget-shadow">
        <h4>Year: <?php echo '2018' ?> </h4>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              
              <th>Module</th>
              <th>Chapter</th>
              <th>Video</th>
              <th>Link</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>

              <?php
              if(count($contents) > 0){
                foreach ($contents as $content) {
                  echo '<tr>';
                    echo '<th scope="row">'.$content['id'].'</th>';
                   
                    echo '<th>'.$content['module_code'].'</th>';
                    echo '<th>'.$content['chapter'].'</th>';
                    echo '<th>'.$content['video'].'</th>';
                    echo '<th>'.$content['link'].'</th>';
                    echo '<th>'.$content['description'].'</th>';
                  

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
       
    </div>
  </div>
</div>



<?php include 'footer.php'; ?>
