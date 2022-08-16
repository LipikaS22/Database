<?php

?>
<html>
<head>
<title>Registration-Page</title>
</head>
<body>
<h1>Registration Page</h1>
<form action="appcode.php" method="post">
Name
<input type="text" name="name"/>
<br/>
<br/>
Gender
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<br/>
<br/>
F'name
<input type="text" name="fname">
<br/>
<br/>
M'name
<input type="text" name="mname">
<br/>
<br/>
E-mail<input type="email" name="email">
<br/>
<br/>
Password
<input type="password" name="password">
<br/>
<br/>
City
<select name="city">
<option value="">--select--</option>
<option>Lucknow</option>
<option>Delhi</option>
<option>Patna</option>
<option>Ahmedabad</option>
<option>Varanasi</option>
</select>
<br/>
<br/>
State
<select name="state">
<option value="">--select--</option>
<option>Bihar</option>
<option>Uttar-Pradesh</option>
<option>Gujarat</option>
<option>Rajasthan</option>
</select>
<br/>
<br/>
Address
<textarea name="addr"></textarea>
</select>
<br/>
<br/>
College
<select name="college">
<option value="">--select--</option>
<option>GGP aadampur</option>
<option>GGP amethi</option>
<option>GGP varanasi</option>
<option>GGP mirzapur</option>
<option>GGP Lucknow</option>
</select>
<br/>
<br/>
Mobile
<input type="number" name="mobile">
<br/>
<br/>
<input type="submit" value="Register">
</form>
</body>


</html>