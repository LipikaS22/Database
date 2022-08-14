<?php
$name=$_POST['name'];
//echo $name;
$gender=$_POST['g'];
//echo $gender;
$city=$_POST['city'];
//echo $city;

$address=$_POST['addr'];
//echo $address;
$fname=$_POST['fname'];
//echo "<br/>";
$mobile=$_POST['mobile'];
//echo $mobile;
$password=$_POST['password'];
//echo $password;
$email=$_POST['email'];
//echo $email; 

//Database Connectivity

$con=mysqli_connect("localhost","root","","softpro");
$query="insert into tbl_register(name,fname,mobile,email,password,city,gender,address,dor)values ('$name','$fname','$mobile','$email','$password','$city','$gender','$address',curdate())";

mysqli_query($con,$query);
echo "Record Inserted Successfully";
?>