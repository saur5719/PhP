<?php
include('include/fun.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paathshla managment System [!]</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <div class="container">
  <header>
  <h2><img src="image/logo.gif" style="height:70px; width:80px;">
  <span>Paathshala Institute</span> 
  </h2>
      
 <div style="float:right; position:relative; top:-50px;">
  <form class="navbar-form navbar-left">
        <div class="form-group" style="margin-top:-20px;">
          <input type="text" style="width:500px;"  class="form-control" placeholder="Search">
        
        <button type="submit" class="btn btn-default">Search</button>
        </div>
      </form>
<span class="glyphicon glyphicon-cog"></span>
<span class="glyphicon glyphicon-cog"></span>
<span class="glyphicon glyphicon-cog"></span>
<span class="glyphicon glyphicon-cog"></span>
</div>
  
  </header>
  </div>
<nav class="navbar navbar-default" style="background:#024493">
  <div class="container-fluid container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="color:white">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
   
      </ul>

      <ul class="nav navbar-nav navbar-right">
      
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Course <span class="caret"></span></a>
          <ul class="dropdown-menu">
<?php $data->get_course(); ?>          
          </ul>
        </li>
        
        <!--2nd dropdown-->
             <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language <span class="caret"></span></a>
          <ul class="dropdown-menu">
          
            <?php $data->get_lang(); ?>
          
          </ul>
        </li>
        
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
    
        <li><a href="#">
        <?php
		session_start();
		include('include/db_connect.php');
		if(isset($_SESSION['user']))
		{
		echo $_SESSION['user'];	
		}
		else
		{
			echo "link";
		}
		?>
        </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login setting <span class="glyphicon glyphicon-cog"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" data-toggle="modal" data-target="#myModal">Student login</a></li>
            <li><a href="#" data-toggle="modal" data-target="#admin">Admin Login</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">

<nav class="visible-xs">
       <div class="list-group">
  <a href="#" class="list-group-item disabled">First item</a>
  <a href="#" class="list-group-item">Second item</a>
  <a href="#" class="list-group-item">Third item</a>
</div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      
      <div class="list-group">
  <a href="#" class="list-group-item disabled">First item</a>
  <a href="#" class="list-group-item">Second item</a>
  <a href="#" class="list-group-item">Third item</a>
</div>
<br>
    </div>
    <br>
    
    <div class="col-sm-9">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="height:300px;">
      <div class="item active">
        <img src="image/b1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Sell $</h3>
          <p>Money Money.</p>
        </div>
      </div>

   
  <?php $data->get_image(); ?>
   
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<br><br>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Users</h4>
            <p>1 Million</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Pages</h4>
            <p>100 Million</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Sessions</h4>
            <p>10 Million</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Bounce</h4>
            <p>30%</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p>
            <p>Text</p>
            <p>Text</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p>
            <p>Text</p>
            <p>Text</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p>
            <p>Text</p>
            <p>Text</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="well">
            <p>Text</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</div>




<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content col-md-8">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Student login</h4>
      </div>
      <div class="modal-body">
      <form method="post" action="login.php">
      	<label>Your Username</label>
      <input type="email" name="user" class="form-control" placeholder="Your Username" required>
      <br>
      	<label>Your Password</label>
      <input type="password" name="pass" class="form-control" placeholder="Your Password" required>
    <br>
      <button class="btn btn-success" type="submit">SignIn</button>
      </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>

  </div>
</div>
<!--admin login-->

<!-- Modal -->
<div id="admin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content col-md-8">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Admin Login</h4>
      </div>
      <div class="modal-body">
      <form method="post" action="admin_login.php">
      	<label>Your Username</label>
      <input type="email" name="user" class="form-control" placeholder="Your Username" required>
      <br>
      	<label>Your Password</label>
      <input type="password" name="pass" class="form-control" placeholder="Your Password" required>
    <br>
      <button class="btn btn-success" type="submit">SignIn</button>
      </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>

  </div>
</div>
 
    <script src="js/google.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>