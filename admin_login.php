<?php
$user=$_POST['user'];
$pass=$_POST['pass'];

$new_user="admin@gmail.com";
$new_pass="1122";

if($new_user=$user AND $new_pass=$pass)
{
	$my_user=$user;
	session_start();
	$_SESSION['user']=$my_user;
	header("location:student_view.php");
}

else
{
echo mysql_error();	
}


?>