
<?php
include('include/db_connect.php');
 $std_name=$_POST['std_name'];
 $std_father=$_POST['std_father'];
 $std_dob=$_POST['std_dob'];
 $std_cs=$_POST['std_cs'];
 $std_city=$_POST['std_city'];
 //$std_gen=$_POST['std_gen'];
 $std_mob=$_POST['std_mob'];
 $std_mail=$_POST['std_mail'];
 $std_add=$_POST['std_add'];

$q=mysql_query("insert into student_regi(std_name,std_father,std_dob,std_cs,std_city,std_mob,std_mail,std_add)values('$std_name','$std_father','$std_dob','$std_cs','$std_city','$std_mob','$std_mail','$std_add')");

if($q)
{
	header("location:student_view.php?msg=Your Data has been successfully saved..");
	
}

else
{
header("location:form_regi.php");
}


?>