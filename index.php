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
<link href="css/stye.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">



    
  </head>
  <body">
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
  <div id="huge">
    <div class="description">
       <h1>WELCOM TO IT VIRTUAL CLASS</H1>
       <a href="login.php" class="btn btn-primary btn-lg" role="button">Login to continue</a>
       <br><br><br>
       <a href="register.php" class="btn btn-primary btn-lg" role="button">create account now</a>
      
    </div>
  </div>

  <!-- start of responsive image-->
  <div class="container" id="why">
 <H1> <B>WHY SHOULD YOU JOIN VIRTUAL IT CLASS</B></H1>
      <div class="row">  
        <div class="col-md-4 col-sm-4 text-center">
          <div class="col-md-12 col-sm-12 call-to-action">
            <img src="images/icon1.png" class="img-circle img-responsive center-block" alt="Placeholder image"> 
              <h3 class="one">Employee attendance system</h3>
                <p class="paragraph">Employee Attendance System (EAS) is a simple window based system whose main purpose is to make sure that the employees are punctual and do their jobs on time.</p>
                  <button type="button" class="btn btn-primary">Download</button>
          </div><!-- end of col-md-12 col-sm-12-->
        </div><!-- end pf col-md-4-->

        <div class="col-md-4 col-sm-4 text-center">
            <div class="col-md-12 col-sm-12 call-to-action">
              <img src="images/icon2.png" class="img-circle img-responsive center-block" alt="Placeholder image"> 
                <h3 class="two">Virtal class</h3>
                  <p class="paragraph">Virtual class is a cost effective classroom for individual trainers and trainees,teaches IT courses live over the network(INTERNET).Give unlimited onlne lessons.
                  </p>
                    <button type="button" class="btn btn-primary">start learning</button>
             </div><!-- end of col-md-12 col-sm-12-->
        </div><!-- end pf col-md-4-->

        <div class="col-md-4 col-sm-4 text-center">
          <div class="col-md-12 col-sm-12 call-to-action">
            <img src="images/icon3.png" class="img-circle img-responsive center-block" alt="Placeholder image"> 
              <h3 class="three">Statistical formulas app</h3>
                <p class="paragraph">An android application that can be installed on all android phones.helps those students duing statistical courses by listing allmst all formulars and a brief explianition of how it works.
                </p>
                <button type="button" class="btn btn-primary">Download</button>
          </div><!-- end of col-md-12 col-sm-12-->
        </div><!-- end pf col-md-4-->
  </div><!-- end row-->
</div><!-- end container-->
   

<?php
    include 'footer1.php';
  ?>



    <script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
  </body>
</html>