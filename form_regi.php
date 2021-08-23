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
<form method="post" action="show_regi.php">
<label> Name</label>
<input type="text" name="std_name" class="form-control" placeholder="Enter name..">
<label> Father Name</label>
<input type="text" name="std_father" class="form-control" placeholder="Enter father name..">
<label> DOB</label>
<input type="date" name="std_dob" class="form-control">
<label> Cdourse</label>
<select name="std_cs" class="form-control">
<option>select your course..</option>
<option>BCA</option>
<option>MCA</option>
<option>BBA</option>
<option>MBA</option>
</select>

<label> City</label>
<select name="std_city" class="form-control">
<option>select your city..</option>
<option>Varanasi</option>
<option>Jaunpur</option>
<option>Allahabad</option>
<option>Delhi</option>
</select>

<label>Gender</label>
<br>
<input type="radio" value="male" name="std_gen"> Male
<input type="radio" value="female" name="std_gen" > Female
<br>
<label> Mobile</label>
<input type="number" name="std_mob" class="form-control" placeholder="your Mobile..">
<label> E-mail</label>
<input type="email" name="std_mail" class="form-control" placeholder="your email..">

<label> Address</label>
<textarea name="std_add" class="form-control">
</textarea>
<br>
<button class="btn btn-primary" type="submit">Submit</button>



</form>
</div>


<!--next-->

<div class="col-md-5 well" style="margin-left:5px;">
<form name="name2" method="post" action="web_show.php" enctype="multipart/form-data">
<label>Course</label>
<input type="text" name="web_course" class="form-control">
<label>Language</label>
<input type="text" name="web_lang" class="form-control">
<label>Home Image Slider</label>
<input type="file" name="image1" class="form-control">
<br>
<button class="btn" type="submit">Submit</button>
</form>
</div>

</div>


</body>
</html>