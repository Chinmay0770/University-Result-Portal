<?php

$al=mysqli_connect("localhost","root","","resultdypiu");

$name = $_POST['name'];
$email= $_POST['mail'];
$id= $_POST['id'];
$pass=sha1($_POST['password']);

$domain = explode('@',$email)[1];

if($domain != 'dypiu.ac.in')
{
    echo'<script>alert("Register only with DYPIU Mail ID")</script>';
}
else{
	if($name==NULL || $email==NULL || $id==NULL || $_POST['password']==NULL)
	{
		//
	}
	else
	{
		// Make Avatar for each user
		
		$character = strtoupper($name[0]);
		$path1 = 'avatar/'.$character.'.png';

		
	}
		$sql=mysqli_query($al,"INSERT INTO student(name,email,dypiu_id,password,user_avatar) VALUES('$name','$email','$id','$pass','$path1')");
		if($sql)
		{
			header("location:../student/Studentlogin.php");
			
		}
		else
		{
			header("location : ../student/Studentregistration.php");
			echo('Email already exists');
		}
}


?>