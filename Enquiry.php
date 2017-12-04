<?php
//declaration
$hostname="localhost";
$user="root";
$pass="";
$dbname="Vaibtech";


//create connection

$conn=mysqli_connect($hostname,$user,$pass,$dbname);
if(!$conn)
{
	die("CONNECTION FAIL" . mysqli_connect_error());
}
echo "Thank you! ";

//posting
$fname=$_POST['fnames'];
$complaint=$_POST['complaint'];
$mob=$_POST['mobs'];
$email=$_POST['emails'];


//insert data
if($fname != "" &&  $complaint != "" && $mob != "" && $email != "" )   
{

$sql2="insert into Testing(Name,Message,Contact,Email_id) values('$fname','$complaint','$mob','$email')";

		if($conn->query($sql2) === true)
		{
			echo "We will contact you soon....";
		}
		else
		{
			echo "ERROR:" . $conn->error;
		}

		
}
else
{
header('location: http://localhost/Associate/contact.html');
}
$conn->close();
?>