<?php
include('include/db_connect.php');
$user=$_POST['user'];
$pass=$_POST['pass'];
$q=mysql_query(" select * FROM student_regi where std_mail='$user' AND std_mob='$pass'");

$show=mysql_fetch_array($q);
$name=$show['std_id'];

if(!empty($name))
{
session_start();
$_SESSION['user']=$name;
header("location:student_area.php");
}
else
{
echo "<script>alert('invalid username or password !')</script>";	
}



 

?>