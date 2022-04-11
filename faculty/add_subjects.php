<?php
	session_start();

	$al = mysqli_connect("localhost","root","","resultdypiu");

    
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
	<link rel="stylesheet" href="css/addsubjects.css">
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
			
			<li class="active">
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
							<a class="active" href="#">Add Subjects</a>
						</li>
					</ul>
				</div>
			</div>


			<?php
                $al=mysqli_connect("localhost","root","","resultdypiu");
                error_reporting(0);

                
                
            ?>
			
			<div class="box-info">
				<div class="ls">
					<form class="select-box" action="" method="POST">
                        <div class = 'elements'>
							
							<span>Enter No of subjects to add</span>
							<input type="text"  name = 'noofsub'>
						    </br></br>
							
						</div>
                        <a href="#" id="subjects"  onclick="addFields();">Enter Subjects</a>
                        <div id='container'>
                        </div>
                        <br/><br/>

                        <div class = 'elements'>
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
						<div class = 'elements'>
							<div>
								<span>Semester</span>
								<select name="sem" id="sem">
									<option value="select">select Semester</option>
									<option value="Sem1">Sem - 1</option>
									<option value="Sem2">Sem - 2</option>
									<option value="Sem3">Sem - 3</option>
									<option value="Sem4">Sem - 4</option>
									<option value="Sem5">Sem - 5</option>
									<option value="Sem6">Sem - 6</option>
									<option value="Sem7">Sem - 7</option>
									<option value="Sem8">Sem - 8</option>
								</select>
							</div>
						</div>

						<div class = 'elements'>
							
							<button type='submit' name = "submit1" class="btn1">Add Subjects</button>
							
						</div>
					</form>
                    <?php
                        $check = 0;
                        $value = '';
                        if(isset($_POST['submit1'])){
                            $subjects = $_POST['noofsub'];
                            for ($i=0; $i < $subjects ; $i++){
								$s = str_replace(' ', '_', $_POST['subject'.$i]);
                                $sql = "insert into subjects values(".($i +1).", '".$_POST['course']."' , '".$_POST['sem']."', '".$s."' , '".$_POST['subjectcode'.$i]."');";
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
                            if($check == 1){
                                header('location:facultydashboard.php');
                            }
                            else if($check == -1){
                                echo 'Update interupted at value '.$value;
                            }
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
        function addFields() {
            debugger;
            var number = document.getElementsByName("noofsub")[0].value;
            var container = document.getElementById("container");
            container.innerHTML = '';
            for (i = 0; i < number; i++) {
                container.appendChild(document.createTextNode("Subject " + (i + 1) + " :"));
                var input = document.createElement("input");
                input.type = "text";
				input.style = "border: 1px solid var(--blue); margin-left: 17%; background-color: var(--light)";
                input.name = "subject" + i;
                //input.required= true;
                container.appendChild(input);
                container.appendChild(document.createElement("br"));
                


                container.appendChild(document.createTextNode("Subject - Code " + (i + 1) + " :"));
                var input1 = document.createElement("input");
                input1.type = "text";
				input1.style = "border: 1px solid var(--blue); margin-left: 6%; background-color: var(--light)";
                input1.name = "subjectcode" + i;
                //input.required= true;
                container.appendChild(input1);
                container.appendChild(document.createElement("br"));
                container.appendChild(document.createElement("hr"));
            }
        }

		function menuToggle() {
			const toggleMenu = document.querySelector('.menu');
			toggleMenu.classList.toggle('active')
		}
	</script>
</body>

</html>