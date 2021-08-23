<?php
session_start();
include('include/db_connect.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Dashboard</title>
<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
<br>
<button class="btn">Home</button>
<button class="btn" data-toggle="modal" data-target="#myModal">View Profile</button>
<button class="btn">View Result</button>
<button class="btn">View Fee</button>
<?php
if(isset($_SESSION['user']))
{
echo '<a href="logout.php"><button class="btn btn-info">
logout
</button></a>';
}
else{
	header("location:index.php");
}
?>

<hr>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content col-md-8">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Student Profile</h4>
      </div>
      <div class="modal-body">
      <?php
	 $id=$_SESSION['user'];
	 $q=mysql_query(" select * from student_regi where std_id='$id'");
	 $show=mysql_fetch_array($q);
	  ?>
      <ul class="list-group">
 <li class="list-group-item">Id<span class="badge"><?php echo $show['std_id']; ?></span></li>
 <li class="list-group-item">Name<span class="badge"><?php echo $show['std_name']; ?></span></li>
 <li class="list-group-item">Father<span class="badge"><?php echo $show['std_mail']; ?></span></li>
 <li class="list-group-item">Email<span class="badge"><?php echo $show['std_mob']; ?></span></li>
 
      </ul>
      
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