<?php

?>

<html>
<head>
<title>
Registration-page
</title>
</head>
<body>
<form action="code.php" method="post">
<h1>Register Here</h1>
Name
<input type="text" name="name">
<br/>
<br/>
fname
<input type="text" name="fname">
<br/>
<br/>
Gender
<input type="radio" name="g" value="male">Male
<input type="radio" name="g" value="female">Female
<br/>
<br/>
Mobile
<input type="number" name="mobile">
<br/>
<br/>
Email
<input type="email" name="email">
<br/>
<br/>
Password
<input type="password" name="password">
<br/>
<br/>
City
<select  name="city">
<option value="">--Select City--</option>
<option>Lucknow</option>
<option>Varanasi</option>
<option>Shimla</option>
<option>Punjab</option>
<option>Ahmedabad</option>
<option>Goa</option>
<option>Thiruvanthpuram</option>
</select>
<br/>
<br/>
Complete Address
<textarea name="addr"></textarea>
<br/>
<br/>

<input type="submit" value="Register">

</form>
</body>
</html>