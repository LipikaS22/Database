<?php
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$mname=$_POST['mname'];
//echo $mname;
$gender=$_POST['gender'];
//echo $gender;
$email=$_POST['email'];
//echo $email;
$city=$_POST['city'];
//echo $city;
$state=$_POST['state'];
//echo $state;
$college=$_POST['college'];
//echo $college;
$mobile=$_POST['mobile'];
//echo $mobile;
$password=$_POST['password'];
//echo $password;
$addr=$_POST['addr'];
//echo $addr;

//Database Connectivity

$con=mysqli_connect("localhost","root","","softpro");
$query="insert into tbl_appointment (name,fname,mname,gender,mobile,password,email,address,city,state,college,dor)values('$name','$fname','$mname','$gender','$mobile','$password','$email','$addr','$city','$state','$college',curdate())";

mysqli_query($con,$query);
//echo "Resgistration successful";
?>