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

$email=$_POST['emails'];


//insert data
if($email != "" )   
{

$sql2="insert into Newssubs(Email_id) values('$email')";

		if($conn->query($sql2) === true)
		{
			echo "We will inform our new invention....";
		}
		else
		{
			echo "ERROR:" . $conn->error;
		}

		
}
else
{
header('location: http://localhost/Associate/index.html');
}
$conn->close();
?>