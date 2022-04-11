<?php

$al=mysqli_connect("localhost","root","","resultdypiu");

$name = $_POST['name'];
$email= $_POST['mail'];
$pass=sha1($_POST['password']);

if($name==NULL || $email==NULL || $_POST['password']==NULL)
{
	//
}

$domain = explode('@',$email)[1];

if($domain != 'dypiu.ac.in')
{
    echo'<script>alert("Register only with DYPIU Mail ID")</script>';
}
else
{
	$character = strtoupper($name[0]);
	$path1 = 'avatar/'.$character.'.png';

	$sql=mysqli_query($al,"INSERT INTO faculty(name,email,password,user_avatar) VALUES('$name','$email','$pass','$path1')");
	if($sql)
	{
        header("location:../faculty/facultylogin.php");
        
	}
	else
	{
        header("location : ../faculty/facultyregistration.php");
		echo('Email already exists');
	}
}
?>