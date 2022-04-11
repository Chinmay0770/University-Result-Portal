<?php

$al=mysqli_connect("localhost","root","","resultdypiu");

$name = $_POST['name'];
$prn = $_POST['prn'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$branch = $_POST['branch'];

$domain = explode('@',$email)[1];

if($domain != 'dypiu.ac.in')
{
    echo'<script>alert("Register only with DYPIU Mail ID")</script>';
}
else{
	$sql=mysqli_query($al,"INSERT INTO student_myprofile(fullname,prn,email,phone,password,branch) VALUES('$name','$prn','$email','$phone','$password','$branch');");
	if($sql)
			{
		header("location:../student_myprofile.php");
				
	}
	else
	{
		header("location : ../student_editprofile.php");
		echo('Email already exists');
	}
}




?>