<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome To Study Management System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="Username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="Password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>


					<input type="submit" value="Admin" name="Admin">
					<input type="submit" value="Student" name="Student">
					<input type="submit" value="Teacher" name="Teacher">
					<input type="submit" value="Parent" name="Parent">


					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>



<?php
include 'connect.php';

session_start();

   if(isset($_POST['Admin'])){

	   $username = $_POST['Username'];
	   $pass = $_POST['Password'];

   	$admin = $connect->query("SELECT * FROM admin where username='" .$username. "' AND password='" .$pass. "'");


   foreach($admin as $checkadmin)
   {
	    if($checkadmin['username']==$username && $checkadmin['password']==$pass){
	   		echo "<script>window.open('index.php?logged_in=you have successfully logged in','_self')</script>";
			}
	   else{
		     echo "<script>alert('password or Email is wrong, try again!')</script>";
	   }
   }
 	}

	if(isset($_POST['Student'])){

		$username = $_POST['Username'];
		$pass = $_POST['Password'];

	 $student = $connect->query("SELECT * FROM students_record where student_id='" .$username. "' AND password='" .$pass. "'");


	foreach($student as $checkstudent)
	{
		 if($checkstudent['student_id']==$username && $checkstudent['password']==$pass){
			 $_SESSION['login_student']=$checkstudent['student_id'];
			 echo "<script>window.open('student/index.php?logged_in=you have successfully logged in','_self')</script>";
		 }
		else{
				echo "<script>alert('password or Email is wrong, try again!')</script>";
		}
	}
 }

 if(isset($_POST['Teacher'])){

	 $username = $_POST['Username'];
	 $pass = $_POST['Password'];

	$teacher = $connect->query("SELECT * FROM teachers_record where tutor_id='" .$username. "' AND password='" .$pass. "'");


 foreach($teacher as $checkteacher)
 {
		if($checkteacher['tutor_id']==$username && $checkteacher['password']==$pass){
			$_SESSION['login_teacher']=$checkteacher['tutor_id'];
			echo "<script>window.open('teacher/index.php?logged_in=you have successfully logged in','_self')</script>";
		}
	 else{
			 echo "<script>alert('password or Email is wrong, try again!')</script>";
	 }
 }
}

if(isset($_POST['Parent'])){

	$username = $_POST['Username'];
	$pass = $_POST['Password'];

 $parent = $connect->query("SELECT * FROM parents_record where email='" .$username. "' AND password='" .$pass. "'");


foreach($parent as $checkparent)
{
	 if($checkparent['email']==$username && $checkparent['password']==$pass){
		 $_SESSION['login_parent']=$checkparent['id'];
		 echo "<script>window.open('parent/index.php?logged_in=you have successfully logged in','_self')</script>";
	 }
	else{
			echo "<script>alert('password or Email is wrong, try again!')</script>";
	}
}
}

if(isset($_POST['Admin'])){

	$username = $_POST['Username'];
	$pass = $_POST['Password'];

 $admin = $connect->query("SELECT * FROM admin where username='" .$username. "' AND password='" .$pass. "'");


foreach($admin as $checkadmin)
{
	 if($checkadmin['username']=='admin'){
		 echo "<script>window.open('index.php?logged_in=you have successfully logged in','_self')</script>";
	 }
	else{
			echo "<script>alert('password or Email is wrong, try again!')</script>";
	}
}
}
?>
