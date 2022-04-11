<?php

$al=mysqli_connect("localhost","root","","resultdypiu");

$name = $_POST['name'];
$qualification = $_POST['qualification'];
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
	$sql=mysqli_query($al,"INSERT INTO faculty_myprofile(fullname,qualification,email,phone,password,branch) VALUES('$name','$qualification','$email','$phone','$password','$branch');");
	if($sql)
			{
				header("location:../faculty/facultymyprofile.php");
				
	}
	else
	{
		header("location : ../faculty/facultyeditprofile.php");
		echo('Email already exists');
	}
}

?>