
<?php
mysql_connect("127.0.0.1","root","");
mysql_select_db("virtual_class");

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
                <li><a href="#">Students</a></li>
                 <li><a href="#">Tutors</a></li>
                <li><a href="#">Courses</a></li>               
                <li><a href="#">Examinations</a></li>       
                <li><a href="#">Contact</a></li>   
             </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php">Help</a></li>
                <li><a href="register.php">Logout</a></li>      
              </ul>
         </div>
          <!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <!--end navbar -->
  <div id="huge">
      <div id="left_side_bar">
         <?php
            $query= mysql_query("SELECT * FROM courses");
            while($row=mysql_fetch_assoc($query)){
            $id=$row['ID'];
            $name=$row['NAME'];
            $units=$row['DURATION'];
            $teacher=$row['TUTOR'];
            echo " $id $name <br />   ";
            }
          ?>
      </div>

      <div id="main_content">
          

      </div>
  </div>
   





    <script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
  </body>
</html>