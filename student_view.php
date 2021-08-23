
<?php
session_start();
include('include/db_connect.php');
error_reporting(0);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
<div class="container">
<h1 align="center">All Student Record</h1>
<h3 style="color:green; text-align:center;">
<?php echo $_GET['msg']; ?>	
</h3>
<table class="table" width="100%">
<tr>
<td colspan="11">
<button class="btn btn-info"><a style="text-decoration:none; color:#fff;" href="form_regi.php"><span class=" glyphicon glyphicon-plus"></span> Add New Student</a></button>
<?php
if(isset($_SESSION['user']))
{
echo '<a href="logout.php"><button class="btn btn-info">
logout '.$_SESSION['user'].'
</button></a>';
}
else{
	header("location:index.php");
}


?>
</td>
</tr>
<tr>
<th>ID</th>
<th>Name</th>
<th>Father</th>
<th>DOB</th>
<th>Course</th>
<th>City</th>
<th>Gender</th>
<th>Email</th>
<th>Mobile</th>
<th>Add</th>
<th>Action</th>
</tr>
<?php

$q=mysql_query("SELECT * FROM student_regi");
while($row=mysql_fetch_array($q))
{

?>
<tr>
<td><?php echo $row['std_id']; ?></td>
<td><?php echo $row['std_name']; ?></td>
<td><?php echo $row['std_father']; ?></td>
<td><?php echo $row['std_dob']; ?></td>
<td><?php echo $row['std_cs']; ?></td>
<td><?php echo $row['std_city']; ?></td>
<td><?php echo $row['std_ gen']; ?></td>
<td><?php echo $row['std_mail']; ?></td>
<td><?php echo $row['std_mob']; ?></td>
<td><?php echo $row['std_add']; ?></td>
<td><a href="remove.php?del=<?php echo $row['std_id']; ?>"><span class="glyphicon glyphicon-remove-circle" style="color:red"></span></a>



&nbsp;&nbsp;&nbsp;<a href="edit.php?edit=<?php echo $row['std_id']; ?>"><span class=" glyphicon glyphicon-edit" style="color:green;"></span></a>





&nbsp;<a href="#?edit=<?php echo $row['std_id']; ?>"><span class=" glyphicon glyphicon-tags" style="color:green;"></span></a></td>
</tr>
<?php } ?>
</table>



</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="js/bootstrap.min.js"></script>
</body>
</html>