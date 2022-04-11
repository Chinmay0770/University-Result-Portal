<?php

$al=mysqli_connect("localhost","root","","resultdypiu");

$email=$_POST['email'];
$pass=mysqli_real_escape_string($al,sha1($_POST['password']));
if($_POST['email']==NULL || $_POST['password']==NULL)
{
	//
}
else
{
	$sql=mysqli_query($al,"SELECT * FROM student WHERE email='$email' AND password='$pass'");
	if(mysqli_num_rows($sql)>0)
	{
		$sql2=mysqli_query($al,"SELECT * FROM student WHERE email='$email' AND password='$pass'");
		while($row = mysqli_fetch_assoc($sql2)){
			session_start();
			$_SESSION['active_name'] = $row['name'];
			$_SESSION['active_email'] = $row['email'];
			$_SESSION['avatar'] = $row['user_avatar'];
		}
		header("location:../student/student_selectcourse.php");
	}
	else
	{
		echo("Incorrect Email ID or Password");
        header("location:../student/Studentlogin.php");
	}
}

?>