<?php
	session_start();

	$al = mysqli_connect("localhost","root","","resultdypiu");

    $subjects1 = $_SESSION['act_subjects'];

	error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/marksupdate.css">
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
			<li class="active">
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
							<a class="active" href="facultydashboard.php">View Result</a>
						</li>
                        <li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a  href="#">Update Marks</a>
						</li>
					</ul>
				</div>
			</div>


			<?php
                $al=mysqli_connect("localhost","root","","resultdypiu");
                error_reporting(0);

                $email = $_GET['update_email'];
                
                
                
            ?>
			
			<div class="box-info">
				<div class="ls">
					<form class="select-box" action="" method="POST">
                        <div class = 'elements'>
							
							<span>Email</span>
							<input type="text" value = <?php echo $email ;?> readonly>
						    </br></br>
							
						</div>
                        <?php
                            for ($x = 0; $x < count($subjects1); $x++) {
                                echo '<div class = "elements">';
                                echo '<span>'.$subjects1[$x].'</span>';
                                echo '<input type = "text" name = "a'.$x.'">';
                                echo '</div>';
                            }
                        ?>

						<div class = 'elements'>
							
							<button type='submit' name = "submit1" class="btn1">Update</button>
							
						</div>
					</form>
                    <?php
                        $table = $_SESSION['act_table'];
                        $check = 0;
                        $value = '';
                        if(isset($_POST['submit1'])){
                            for ($i=0; $i < count($subjects1); $i++){
                            $sql = "update ".$table." set ".$subjects1[$i]." = '".$_POST['a'.$i]."' where email = '".$email."';";
                            $result = mysqli_query($al, $sql);
                            if($result){
                                $check = 1;
                                continue;
                            }
                            else{
                                $check = -1;
                                $value = ''.$i;
                                break;
                            }
                            }
                        }
                        if($check == 1){
                            header('location:facultydashboard.php');
                        }
                        else if($check == -1){
                            echo 'Update interupted at value '.$value;
                        }
                        
                    ?>
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