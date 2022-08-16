<?php
$con=mysqli_connect("localhost","root","","softpro");
$query="select * from tbl_register";
$res=mysqli_query($con,$query);
?>
<html>
<head>
</head>
<body>
<table border="1" align="center">
<h1 align="center">All Records</h1>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>F'Name</th>
		<th>Gender</th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Password</th>
		<th>City</th>
		<th>Address</th>
		<th>DOR</th>
	</tr>
	<?php
while($row=mysqli_fetch_array($res))
{
	?>
	<tr>
		<td><?php echo $row['0'];?></td>
		<td><?php echo $row['1'];?></td>
		<td><?php echo $row['2'];?></td>
		<td><?php echo $row['3'];?></td>
		<td><?php echo $row['4'];?></td>
		<td><?php echo $row['5'];?></td>
		<td><?php echo $row['6'];?></td>
		<td><?php echo $row['7'];?></td>
		<td><?php echo $row['8'];?></td>
		<td><?php echo $row['9'];?></td>
	</tr>
<?php	
}
?>

</table>
</table>
</body>
</html>