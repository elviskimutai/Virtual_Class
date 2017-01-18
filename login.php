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
  <div id="huge">
    <div class="modal-dialog" id="login">
	<div class="modal-content" id="content">
		<div class="modal-header">
			<h1 class="text-center">Login page</h1>
		</div>
		<div class="modal-body">
			<form class="col-md-12 center-block" method="post" action="validatelogin.php">
				<div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="email" name="username">
					
				</div>
				<div class="form-group">
					<input type="password" class="form-control input-lg" placeholder="password" name="password">
					
				</div>
				<div class="form-group">
					<input type="submit" class="btn ntn-block btn-lg btn-primary" value="log me in" name="submit">
					<span class="pull-right"><a href="register.php">Register</a></span>
					<span><a href="recoverpass.php">Forgot password?</a></span>
					
				</div>
			</form>
			<div class="modal-footer">
				<div class="col-md-12">
					 <a href="index.html" class="btn btn-primary btn-lg" role="button">Cancel</a>
				</div>
				
			</div>
		</div>
	</div>
	
</div>
  </div>
   





    <script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
  </body>
</html>