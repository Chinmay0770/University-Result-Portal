<?php 
	session_start();

	error_reporting(0);
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
	<link rel="stylesheet" href="css/facultymyprofile.css">
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
			<li>
				<a href="facultyuploadresult.php">
					<i class='bx bxs-file-import'></i>
					<span class="text">Upload Result</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li class="active">
				<a href="#">
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
							<a class="active" href="#">My Profile</a>
						</li>
					</ul>
				</div>
			</div>

				<div class="box-container">
					<div class="reg">
						<div class="title">My Profile</div>
						<div class="content">
							<form action="#">

							<?php
                                $al=mysqli_connect("localhost","root","","resultdypiu");



                                $sql = mysqli_query($al,"select * from faculty_myprofile where email = '".$_SESSION['active_email_fac']."';");
                                $result = mysqli_num_rows($sql);
                                if ($result > 0){
                                    while($row = mysqli_fetch_assoc($sql)){?>


								<div class="user-details">
									<div class="input-box">
										<span class="details">Full Name</span>
										<input type="text" id='name' value='<?php echo $row['fullname']; ?>' readonly>
									</div>
									<div class="input-box">
										<span class="details">Qualification</span>
										<input type="text" id='qualification' value='<?php echo $row['qualification']; ?>' readonly>
									</div>
									<div class="input-box">
										<span class="details">Email</span>
										<input type="email" id='email' value='<?php echo $row['email']; ?>' readonly>
									</div>
									<div class="input-box">
										<span class="details">Phone Number</span>
										<input type="number" id='phone' value='<?php echo $row['phone']; ?>' readonly>
									</div>
									<div class="input-box">
										<span class="details">Password</span>
										<input type="password" id='password' value='<?php echo $row['password']; ?>' readonly>
									</div>
									<div class="input-box">
										<span class="details">Branch</span>
										<input type="text" id='branch' value='<?php echo $row['branch']; ?>' readonly>
									</div>
								</div>

								<div>
									<button class="btn1"><a href="facultyeditprofile.php">Edit Profile &rarr;</a></button>
								</div>
							</form>
							<?php   }
                                }      
                            ?>
						</div>
					</div>
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