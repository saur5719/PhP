<?php

include('include/db_connect.php');
$del=$_GET['del'];
$q=mysql_query(" DELETE FROM student_regi WHERE std_id='$del'");
if($q)
{
header("location:student_view.php?msg=Your Data has been successfully deleted..");
}
else{
	
header("location:student_view.php?msg=sorry..");

}
?>


