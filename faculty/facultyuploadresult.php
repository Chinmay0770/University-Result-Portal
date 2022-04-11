<?php 

//error_reporting(0);
session_start();
include '../mysql/config.php';

$link = "";
$link_status = "display: none;";

 


if (isset($_POST['upload'])) { // If isset upload button or not
	// Declaring Variables
	$location = "uploads/";
	$file_new_name = date("dmy") . time() . $_FILES["file"]["name"]; // New and unique name of uploaded file
	$file_name = $_FILES["file"]["name"]; // Get uploaded file name
	$file_temp = $_FILES["file"]["tmp_name"]; // Get uploaded file temp
	$file_size = $_FILES["file"]["size"]; // Get uploaded file size

	/*
	How we can get mb from bytes
	(mb*1024)*1024

	In my case i'm 10 mb limit
	(10*1024)*1024
	*/

	if ($file_size > 10485760) { // Check file size 10mb or not
		echo "<script>alert('Woops! File is too big. Maximum file size allowed for upload 10 MB.')</script>";
	} 
	else {
		$sql = "INSERT INTO uploaded_files (name, new_name) VALUES ('$file_name', '$file_new_name')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			move_uploaded_file($file_temp, $location . $file_name);
			echo "<script>alert('File uploaded successfully.')</script>";
			// Select id from database
			$sql = "SELECT id FROM uploaded_files ORDER BY id DESC";
			$result = mysqli_query($conn, $sql);
			if ($row = mysqli_fetch_assoc($result)) {
				$link = $base_url . "download.php?id=" . $row['id'];
				$link_status = "display: block;";
			}


			// Insert data from csv file
			$file_name1 = "uploads/".$file_name;
			$file_name = substr_replace($file_name, '' , -4);
			
			$file = fopen($file_name1, 'r');
			while ($row = fgetcsv($file) ) {
				$value = "'".implode("','",$row)."'";
				$q = "insert into ".$file_name." values(".$value.");";
				
				$result = mysqli_query($conn , $q);
				
			}
		}
			
			
		else {
			echo "<script>alert('Woops! Something wong went.')</script>";
		}
	}
	
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/facultyuploadresult.css">
	<link rel="shortcut icon" type="image/png" href="images/favicon-16x16.png" />
	<link rel="shortcut icon" type="image/png" href="images/favicon-32x32.png" />

	<title>Faculty Dashboard</title>
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="images/logo.png">
			<span class="text">DYPIU Result Dashboard</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="facultydashboard.php">
					<i class='bx bx-info-circle'></i>
					<span class="text">View Result</span>
				</a>
			</li>

			<li>
				<a href="add_subjects.php">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">Add Subjects</span>
				</a>
			</li>
			<li class="active">
				<a href="facultyuploadresult.php">
					<i class='bx bxs-file-import'></i>
					<span class="text">Upload Result</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="facultymyprofile.php">
					<i class='bx bx-user'></i>
					<span class="text">My Profile</span>
				</a>
			</li>
			<li>
				<a href="facultyeditprofile.php">
					<i class='bx bx-edit'></i>
					<span class="text">Edit Profile</span>
				</a>
			</li>
			<li>
				<a href="mysql/fac_logout.php" class="logout">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<div class="profile" onclick="menuToggle();">
				<img src="../<?php echo $_SESSION['avatar']; ?>" alt="">
			</div>
			<div class="menu">
				<h3>
					<?php echo $_SESSION['active_name_fac']; ?>
					<div>
						<label>Faculty</label>
					</div>
				</h3>

			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Upload Result</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="box-info">
				<div class="ls">
					<form class="select-box" action="" method="POST">
						<div class='elements'>
							<div>
								<span>Batch Year</span>
								<input type="text" name="year" id="" placeholder="Batch Year , Eg : 2020">
								</br></br>
							</div>
						</div>
						<div class='elements'>
							<div>
								<span>Choose Course</span>
								<select name="course" id="course">
									<option value="select">select Your Course</option>
									<option value="B.Tech CSE">B.Tech CSE</option>
									<option value="B.Tech Bio">B.Tech Bio</option>
									<option value="B.Des">B.Des</option>
									<option value="B.A JMC">B.A JMC</option>
									<option value="M.Tech">M.Tech</option>
									<option value="BCA">BCA</option>
									<option value="MCA">MCA</option>
									<option value="BBA">BBA</option>
									<option value="B.Com">B.Com</option>
									<option value="MBA Digital Business">MBA Digital Business</option>
									<option value="MBA Agri - Business">MBA Agri-Business</option>
									<option value="BBA">BBA</option>
									<option value="M.Sc Medical Biotechnology">M.Sc Medical Biotechnology</option>
									<option value="PhD">PhD</option>
								</select>
							</div>
						</div>
						<div class='elements'>
							<div>
								<span>Semester</span>
								<select name="sem" id="sem">
									<option value="select">select Semester</option>
									<option value="sem1">Sem - 1</option>
									<option value="sem2">Sem - 2</option>
									<option value="sem3">Sem - 3</option>
									<option value="sem4">Sem - 4</option>
									<option value="sem5">Sem - 5</option>
									<option value="sem6">Sem - 6</option>
									<option value="sem7">Sem - 7</option>
									<option value="sem8">Sem - 8</option>
								</select>
							</div>
						</div>

						<div class='elements'>
							<div>
								<button type='submit' name='submit' class="btn1">Load Table Details</button>
							</div>
						</div>
					</form>

				</div>



			</div>
			<div class="box-info">
				<div class="ls" style='width : 500px; height = 300px ; margin-left : 31%;'>

					<div class="elements">
						<h3 style="color : var(--dark);">FILE DETAILS</h3>

						<?php

						$al = mysqli_connect("localhost","root","","resultdypiu");
						if (isset($_POST['submit'])){

							$year = $_POST['year'];
							$course = $_POST['course'];
							$sem = $_POST['sem'];

							$string = str_replace(' ', '', $course);
							$string1 = str_replace('.', '', $string);

							$string2 = str_replace('-', '', $sem);
							

							$table = $year.$string1;
							$table = $table.$string2;
							$table = strtolower($table);

							// Check if the table is there in the db or not

							if ($result = mysqli_query($al , "SHOW TABLES LIKE '".$table."'")) {
								if($result->num_rows == 1) {
									echo "Table exists";
									echo '<br>';
									$sql = mysqli_query($al , "drop table ".$table.";");
									if($sql){
										echo $table." is removed , Please enter the details again to continue.";
									}
									unlink("uploads/".$table.".csv");
								}
							
								else {
									
									echo "<span style = 'color : var(--dark);'>Your File name should be : ".$table."</span>";
									echo '<br>';
									echo '<br>';
									echo '<h3 style = "color : var(--dark);">Your table should contain these columns : </h3>';
									
									echo "<span style = 'color : var(--dark);'>Email</span>";
									echo '<br>';

									$sql = mysqli_query($al , "select subjects from subjects where semester = '".$sem."' and course = '".$course."';");
									$result = mysqli_num_rows($sql);
									$s = "create table ".$table."( email varchar(50),";
									if($result>0){
										while($row = mysqli_fetch_assoc($sql)){
											echo "<span style = 'color : var(--dark);'>".$row['subjects']."</span>";
											$s .= $row['subjects'];
											$s .= " varchar(20),";
											echo '<br>';
										}
										$s = substr_replace($s , ");" , -1);
										
										// Creating table with for result
										$sql1 = mysqli_query($al , $s);
										echo $s;
										if($sql){
											echo "Result initiated , Please upload the file ...";
										}

									}
								}
							}	
							
						}
					?>
					</div>
				</div>
			</div>

			<div class="file__upload">
				<div class="header">
					<p><i class="fa fa-cloud-upload fa-2x"></i><span><span>up</span>load</span></p>
				</div>
				<form action="" method="POST" enctype="multipart/form-data" class="body">
					<!-- Sharable Link Code -->
					<input type="checkbox" id="link_checkbox">
					<input type="text" value="<?php echo $link; ?>" id="link" readonly>
					<label for="link_checkbox" style="<?php echo $link_status; ?>">Get Sharable Link</label>

					<input type="file" name="file" id="upload" accept=".csv" required>
					<label for="upload">
						<i class="fa fa-file-text-o fa-3x"></i>
						<p>
							<strong>Drag and drop</strong> files here<br>
							or <span>browse</span> to begin the upload
						</p>
						<br><br>
						<p>Only <strong style="color:red;">.CSV</strong> file can be uploaded <span style="color:red; text-decoration:none;">*</span></p>
					</label>
					<button name="upload" class="btn">Upload</button>
				</form>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->



	<script src="js/facultydashboard.js"></script>
	<script>
		function menuToggle() {
			const toggleMenu = document.querySelector('.menu');
			toggleMenu.classList.toggle('active')
		}
	</script>
</body>

</html>