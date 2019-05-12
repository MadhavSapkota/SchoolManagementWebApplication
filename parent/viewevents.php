<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';




  $selectevent = $connect->prepare("SELECT * From events_record ");
  $selectevent->execute();
  $events = $selectevent->fetchAll();
  ?>

<div id="page-wrapper">
  <div class="main-page">
    <div class="tables">
      <h2 class="title1">events</h2>
      <div class="panel-body widget-shadow">
        <h4>Year: <?php echo '2018' ?> </h4>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Date</th>
              <th>Description</th>
              


            </tr>
          </thead>
          <tbody>

              <?php
              if(count($events) > 0){
                foreach ($events as $event) {
                  echo '<tr>';
                    echo '<th scope="row">'.$event['event_id'].'</th>';
                    echo '<th>'.$event['title'].'</th>';
                    echo '<th>'.$event['date'].'</th>';
                    echo '<th>'.$event['description'].'</th>';



                  echo'</tr>';
                }
              }
              else{
                echo ' No Events Found';
              }
            ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
