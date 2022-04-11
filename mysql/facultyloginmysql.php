<?php

$al=mysqli_connect("localhost","root","","resultdypiu");

$email=mysqli_real_escape_string($al,$_POST['email']);
$pass=mysqli_real_escape_string($al,sha1($_POST['password']));
if($_POST['email']==NULL || $_POST['password']==NULL)
{
	//
}
else
{
	$sql=mysqli_query($al,"SELECT * FROM faculty WHERE email='$email' AND password='$pass'");
	if(mysqli_num_rows($sql)==1)
	{
		$sql2=mysqli_query($al,"SELECT * FROM faculty WHERE email='$email' AND password='$pass'");
		while($row = mysqli_fetch_assoc($sql2)){
			session_start();
			$_SESSION['active_name_fac'] = $row['name'];
			$_SESSION['active_email_fac'] = $row['email'];
			$_SESSION['avatar'] = $row['user_avatar'];
		}
		header("location:../faculty/facultydashboard.php");
	}
	else
	{
		echo("Incorrect Email ID or Password");
        header("location:../faculty/facultylogin.php");
	}
}

?>