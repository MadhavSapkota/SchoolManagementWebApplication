<?php
  include 'header.php';
  include 'sidebar.php';
  include 'subHeader.php';
  ?>

    <div id="page-wrapper">
  	<div class="main-page">
    <div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
            <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                    <?php
                                                   
                           $select = $connect->prepare("SELECT * From students_record ");
                               $select->execute();
                                      $students = $select->fetchAll();
                                       $i=0;
                                          foreach($students as $student){
                                              $i++;
                                                }
                                                echo $i;
                                                ?>
                      <h5><strong><a href="students.php">Students</a></strong></h5>
                     
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
                    <div class="stats">
                    <?php
                                                   
                          $select = $connect->prepare("SELECT * From courses_record ");
                               $select->execute(); 
                               $courses = $select->fetchAll();                                                             $students = $select->fetchAll();
                                      $i=0;
                                      foreach($courses as $course){
                                       $i++;
                                          }
                                               echo $i;
                                          ?>
                      <h5><strong><a href="Courses.php">Courses</a></strong></h5>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
            <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
                    <div class="stats">
                    <?php
                         $select = $connect->prepare("SELECT * From modules_record ");
                            $select->execute(); 
                            $modules = $select->fetchAll();                                                             $students = $select->fetchAll();
                             $i=0;
                              foreach($modules as $module){
                             $i++;
                                     }
                                      echo $i;
                                     ?>
                       <h5><strong><a href="modules.php">Modules</a></strong></h5>
                      
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
                    <div class="stats">
                    <?php
                     $select = $connect->prepare("SELECT * From events_record ");
                      $select->execute(); 
                      $events = $select->fetchAll();                                                             $students = $select->fetchAll();
                         $i=0;
                          foreach($events as $event){
                           $i++;
                              }
                               echo $i;
                               ?>
                       <h5><strong><a href="events.php">Events</a></strong></h5>
                    
                    </div>
                </div>
        	 </div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                    <?php
                     $select = $connect->prepare("SELECT * From teachers_record ");
                      $select->execute(); 
                      $teachers = $select->fetchAll();                                                             $students = $select->fetchAll();
                         $i=0;
                          foreach($teachers as $teacher){
                           $i++;
                              }
                               echo $i;
                               ?>
                       <h5><strong><a href="teachers.php">Teachers</a></strong></h5>
                      
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
		</div>
    </div>
    </div>


<?php include 'footer.php'; ?>
