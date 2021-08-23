<?php
include('include/db_connect.php');
$edit=$_GET['edit'];
$q=mysql_query("select * from student_regi where std_id='$edit'");
$row=mysql_fetch_array($q);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>

<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">

<h2> Student Registration Form </h2>
<hr>
<div class="col-md-6 well">
<form method="post" action="update.php">
<input type="hidden" value="<?php echo $row['std_id']; ?>" name="std_id">
<label> Name</label>
<input type="text" name="std_name" value="<?php echo $row['std_name']; ?>" class="form-control" placeholder="Enter name..">
<label> Father Name</label>
<input type="text" value="<?php echo $row['std_father']; ?>" name="std_father" class="form-control" placeholder="Enter father name..">
<label> DOB</label>
<input type="date" value="<?php echo $row['std_dob']; ?>" name="std_dob" class="form-control">
<label> Cdourse</label>
<select name="std_cs" class="form-control">
<option><?php echo $row['std_cs']; ?></option>
<option>BCA</option>
<option>MCA</option>
<option>BBA</option>
<option>MBA</option>
</select>

<label> City</label>
<select name="std_city" class="form-control">
<option><?php echo $row['std_city']; ?></option>
<option>Varanasi</option>
<option>Jaunpur</option>
<option>Allahabad</option>
<option>Delhi</option>
</select>

<label>Gender</label>

<input type="text" value="<?php echo $row['std_ gen']; ?>"  name="std_gen"  class="form-control">



<label> Mobile</label>
<input type="number" value="<?php echo $row['std_mob']; ?>" name="std_mob" class="form-control" placeholder="your Mobile..">
<label> E-mail</label>
<input type="email" value="<?php echo $row['std_mail']; ?>" name="std_mail" class="form-control" placeholder="your email..">

<label> Address</label>
<textarea name="std_add" class="form-control">
<?php echo $row['std_add']; ?>
</textarea>
<br>
<button class="btn btn-primary" type="submit">Submit</button>



</form>
</div>

</div>


</body>
</html>