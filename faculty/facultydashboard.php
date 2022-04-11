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
	<link rel="stylesheet" href="css/facultydashboard.css">
	<link rel="shortcut icon" type="image/png" href="images/favicon-16x16.png" />
    <link rel="shortcut icon" type="image/png" href="images/favicon-32x32.png" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	<title>Faculty Dashboard</title>
</head>

<body onload="initClock()">


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="images/logo.png">
			<span class="text">DYPIU Result Dashboard</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
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
				<a href="../mysql/facultylogout.php" class="logout">
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
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>


			<?php
                $al=mysqli_connect("localhost","root","","resultdypiu");
                error_reporting(0);

                $sql=mysqli_query($al,"SELECT count(email) as total FROM student;");
                $result = mysqli_num_rows($sql);
                if ($result > 0){
                    while($row = mysqli_fetch_assoc($sql)){
                        $sql = $row['total'];
                    }
                }
                

                $sql1=mysqli_query($al,"SELECT count(email) as total FROM faculty;");
                $result1 = mysqli_num_rows($sql1);
                if ($result1 > 0){
                    while($row1 = mysqli_fetch_assoc($sql1)){
                        $sql1 = $row1['total'];
                    }
                }
            ?>
			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check'></i>
					<span class="text">
						<h3>
							<?php echo $sql ;?>
						</h3>
						<p>Student Registrations</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group'></i>
					<span class="text">
						<h3>
							<?php echo $sql1 ;?>
						</h3>
						<p>Faculty Registrations</p>
					</span>
				</li>
				<div class="datetime">
      <div class="date">
        <span id="dayname">Day</span>,
        <span id="month">Month</span>
        <span id="daynum">00</span>,
        <span id="year">Year</span>
      </div>
      <div class="time">
        <span id="hour">00</span>:
        <span id="minutes">00</span>:
        <span id="seconds">00</span>
        <span id="period">AM</span>
      </div>
    </div>
			</ul>
			<div class="box-info">
				<div class="ls">
					<form class="select-box" action="" method="POST">
						<div class = 'elements'>
							<div>
								<span>Batch Year</span>
								<input type="text" name="year" id="" placeholder="Batch Year , Eg : 2020">
								</br></br>
							</div>
						</div>
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

						<div class = 'elements'>
							<div>
								<button type='submit' name = 'submit' class="btn1" >View Result</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div id="chart"></div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Result Details</h3>
						<i class='bx bx-search'></i>
						<i class='bx bx-filter'></i>
					</div>
					<table>
						<thead>


							<?php 
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

									$sql = mysqli_query($al,"select * from subjects where semester = '".$sem."' and course = '".$course."';");
                                        $result = mysqli_num_rows($sql);

                                        // Creating an array of Subjects
                                        $subjects = "";
                                        if ($result > 0){
                                            $z = 0;
                                            $subjects1 = array();
                                            while($row = mysqli_fetch_assoc($sql)){
                                                $subjects .= $row['subjects'].",";
                                                $subjects1[$z] = $row['subjects'];
                                                $z++;
                                            }
                                            $subjects = substr_replace($subjects ,"",-1);
                                            
                                        }

									
									$stats = [];
									$y = 0;

									$sq = mysqli_query($al,"select * from ".$table.";");
									
									$tot = mysqli_num_rows($sq);
									
									while($y < count($subjects1)){
										$sql3 = mysqli_query($al,"select ".$subjects1[$y]." from ".$table." where ".$subjects1[$y]." = 'F';");
										$f = mysqli_num_rows($sql3);
										
										$f = round((($tot - $f)/$tot)*100);
										
										$stats[$y] = $f;
										$y++;
									}

									
									$chart_data = '';

									$i = 0;
									while($i < count($stats))
									{
										$chart_data .= "{subject:'".$subjects1[$i]."',Percentage:".$stats[$i]."},";
										$i++;
									}
									$chart_data = substr($chart_data, 0, -1);
									
									


								}
							?>
							<tr>
								<th>Sr No.</th>
								<th>Email</th>
								<?php
									for ($x = 0; $x < count($subjects1); $x++) {
										echo "<th>". $subjects1[$x]."</th>";
									}
									  $_SESSION['act_subjects'] = $subjects1;
									  $_SESSION['act_table'] = $table;
								?>
								<th>Update</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>

							<?php
								$sql2 = mysqli_query($al,"select email,".$subjects." from ".$table.";");
								$result1 = mysqli_num_rows($sql2);
								if($result1 > 0){
									$i = 1;
									while ($row1 = mysqli_fetch_assoc($sql2))
									{
										echo "<tr>";
										echo "<td>".$i."</td>";
										echo "<td>".join("</td><td>",$row1)."</td>";
										echo '<td><button class = "updbtn"><a href = "../faculty/marksupdate.php?update_email='.$row1['email'].'" class ="text-light">Update</a></button></td>';
										echo '<td><button class = "dltbtn"><a href = "../faculty/marksdelete.php?delete_email='.$row1['email'].'" class ="text-light">Delete</a></button></td>';
										echo "</tr>";
										$i++;
									}
								}
							?>

							
						</tbody>
					</table>
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
	<script>
		Morris.Bar({
		element : 'chart',
		data:[<?php echo $chart_data; ?>],
		xkey:'subject',
		ykeys:['Percentage'],
		labels:['Pass Percentage']
		
		});
</script>
	
</body>

</html>