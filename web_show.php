<?php
include('include/db_connect.php');
$web_course=$_POST['web_course'];
$web_lang=$_POST['web_lang'];


//code for geting image
$img=$_FILES['image1']['name'];
$image1=uniqid().$img;
$p_img1_tmp=$_FILES['image1']['tmp_name'];
move_uploaded_file($p_img1_tmp,"upload/$image1");

$q=mysql_query(" insert into web_con (web_course,web_lang,web_slider)values('$web_course','$web_lang','$image1')");

if($q)
{
	echo "save";
}

else

{
	echo "no";
}


?>
