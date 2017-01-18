<?php
session_start();
if(isset($_POST['register']))
{
$link = mysqli_connect("localhost", "root", "", "virtual_class");
if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}
$course_id = mysqli_real_escape_string($link, $_POST['id']);
$course_name = mysqli_real_escape_string($link, $_POST['name']);
$number_of_units= mysqli_real_escape_string($link, $_POST['units']);

$course_duration = mysqli_real_escape_string($link, $_POST['duration']);
$teacher = mysqli_real_escape_string($link, $_POST['tutor']);


$sql = "INSERT INTO courses (ID, NAME, UNITS, DURATION, TUTOR) VALUES ('$course_id','$course_name', '$number_of_units', '$course_duration','$teacher')";
if(mysqli_query($link, $sql)){

    

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// close connection

mysqli_close($link);
}

?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Virtual Class</title>

    <!-- Bootstrap -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/register.css" rel="stylesheet" type="text/css">


    
  </head>
  <body id="huge">
  <!--navbar -->
<nav class="navbar navbar-default navbar-fixed-top navabar-inverse">
  <div class="container-fluid">
   <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
             <a class="navbar-brand" href="index.html"><span class="title">VURTUAL CLASS</span></a>
          </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="topFixedNavbar1">
              <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="index.html">Home <span class="sr-only">(current)</a></li>
                <li><a href="#">Certifications</a></li>
                <li><a href="#">Courses</a></li>               
                <li><a href="#">Downloads</a></li>       
                <li><a href="#">Contact</a></li>   
             </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>      
              </ul>
         </div>
          <!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <!--end navbar -->
  <div >
    <div class="modal-dialog" >
			<h1 class="text-center">fill in here to add a new course</h1>	
		<div class="modal-body">
			<form class="col-md-12 center-block" method="post" action="new_course.php">
				<div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="course id" name="id">
					
				</div>
        <div class="form-group">
          <input type="text" class="form-control input-lg" placeholder="course name" name="name">
          
        </div>
				<div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="nmber of units" name="units">
					
				</div>
        <div class="form-group">
          <input type="text" class="form-control input-lg" placeholder="course duration" name="duration">
          
        </div>
        <div class="form-group">
          <input type="text" class="form-control input-lg" placeholder="name of tutor" name="tutor">
          
        </div>
        
				<div class="form-group">
					<input type="submit" class="btn ntn-block btn-lg btn-primary" value="add now" name="register">
					
					
				</div>
			</form>
			
		</div>
	
</div>
  </div>
   





    <script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
  </body>
</html>