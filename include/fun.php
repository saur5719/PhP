<?php
class web{
	
	function __construct(){
		require_once('db_connect.php');
	}
	
	function get_lang()
	{
	$q=mysql_query(" select web_lang from web_con");
	while($row=mysql_fetch_array($q))
	{
	$lan=$row['web_lang'];	
	echo '<li><a href="#">'.$lan.'</a></li>';
	}	
	}	
	
// code for geting course

	function get_course()
	{
	$q=mysql_query(" select web_course from web_con");
	while($row=mysql_fetch_array($q))
	{
	$lan=$row['web_course'];	
	echo '<li><a href="#">'.$lan.'</a></li>';
	}	
	}	
	
	// close
	
	
	// code for geting img

	function get_image()
	{
	$q=mysql_query(" select web_slider from web_con");
	while($row=mysql_fetch_array($q))
	{
	$img=$row['web_slider'];
	echo '
	   <div class="item">
        <img src="upload/'.$img.'" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>
      </div>';	
	
	}	
	}	
	
	// close

	
}

$data=new web;







?>