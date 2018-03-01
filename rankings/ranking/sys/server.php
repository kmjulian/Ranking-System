<?php
include 'application/config/DB.php';
session_start();
$uname='';
$fname='';
$lname='';
$email='';
$errors = array();

		if (isset($_REQUEST['login'])) {

 		 $uname = $dbcon->real_escape_string($_POST['uname']);
 		 $ppass = md5($dbcon->real_escape_string($_POST['pword']));

		  if (count($errors) == 0) {
 		 	$query = "SELECT * FROM user WHERE user_username='$uname' AND user_password='$ppass'";
      
 		 	$results = $dbcon->query($query);

  				$row=$results->fetch_assoc();
			
  				$row=$row['user_position'];

  			if (mysqli_num_rows($results) == 1) {

  				if ($uname == "admin") {
  					$_SESSION['uname'] = $uname;
  			  header('location: sys/application/index.php');
  				}
  				elseif
  					($uname == "student"){ 
  					$_SESSION['uname'] = $uname;
  			  header('location: sys/application/student_page/index.php');

  				}elseif
  					($uname == "teacher") {

  					$_SESSION['uname'] = $uname;
  			  header('location: sys/application/subject_teacher/index.php');
  				}
          elseif
            ($uname == "registrar") {

            $_SESSION['uname'] = $uname;
          header('location: sys/application/registrar/index.php');
          }
          elseif
            ($uname == "principal") {

            $_SESSION['uname'] = $uname;
          header('location: sys/application/principal/index.php');
          }
  				
  			}
  			else {
  				array_push($errors, "Wrong username/password combination");
  			}
  }

}

?>