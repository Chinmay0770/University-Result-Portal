<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Result - DYPIU</title>
    <link rel="stylesheet" href="css/student_selectcourse.css">
    <link rel="shortcut icon" type="image/png" href="../images/favicon-16x16.png" />
    <link rel="shortcut icon" type="image/png" href="../images/favicon-32x32.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
</head>

<body>

    <nav class="navbar-one flex">
        <div class="left flex">
            <div class="email">
                <span><a href="mailto:info@dypiu.ac.in">info@dypiu.ac.in</a></span>
            </div>
            <div class="call">
                <span><a href="tel:+91-9071123434">+91-9071123434</a></span>
            </div>
        </div>

        <div class="right flex">
            <ul class="abc">
                <li><a href="https://dypiu.ac.in/pdf/UGC-Proforma-26-01-2021.pdf">UGC Inspection</a></li>
                <li><a href="https://www.dypiu.ac.in/placements">Placements</a></li>
                <li><a href="https://www.dypiu.ac.in/news-events">News & Events</a></li>
                <li><a href="https://www.dypiu.ac.in/careers">Careers</a></li>
                <li><a href="http://www.ranjan.in/topics/dypiu/">VC's Blog</a></li>
            </ul>
            <ul class="vc">
                <li><a href="Studentlogin.html">Result</a></li>
            </ul>
            <button class="btn"><a href="https://dypiureg.extraaedge.com/">Apply Now</a></button>
        </div>
    </nav>

    <nav class="navbar-second flex">
        <div class="logo">
            <a href="https://dypiu.ac.in"><img src="images/logo.png"></a>
        </div>
        <ul class="flex">
            <li><a href="https://dypiu.ac.in">Home</a></li>
            <li><a href="#">AboutUs</a></li>
            <li><a href="#">Academics</a></li>
            <li><a href="https://www.dypiu.ac.in/research">Research</a></li>
            <li><a href="#">Admissions</a></li>
            <li><a href="#">People</a></li>
            <li><a href="#">Campus</a></li>
            <li><a href="https://www.dypiu.ac.in/contact-us">ContactUs</a></li>
        </ul>
    </nav>
    <hr>

    <div class="container">
        <h2>Don't Panic It's Your Result Time !!!</h2>
        <div class="main-wrap">
            <div class="box-container">
                <div class="img-box">

                </div>
                <div class="form-wrap">
                    <!--<div class="top-signup">
                        <span>Don't you have an account?</span>
                        <a href="#" class="signup-btn">SIGN UP</a>
                    </div> -->
                    <div class="action">
                        <div class="profile" onclick="menuToggle();">
                        <?php
                            

                            $conn = mysqli_connect("localhost","root","","resultdypiu");

                            if($conn->connect_error){
                                die("connection failed");
                            }
                            session_start();
                            $sql = mysqli_query($conn,"SELECT * FROM student WHERE email = '".$_SESSION['active_email']."';");
                            $result = mysqli_num_rows($sql);
                            if ($result > 0){
                                while($row = mysqli_fetch_assoc($sql)){
                                    echo '<img src=../'.$row["user_avatar"].' alt = "" />';                            }
                            }
                            
                        ?>
                        </div>

                        <div class="menu">
                            <h3>
                                <?php
                                   echo $_SESSION['active_name'];
                                ?>
                                <div>
                                    Student
                                </div>
                            </h3>
                            <ul>
                                <li>
                                    <span class="material-icons icons-size">person</span>
                                    <a href="student_myprofile.php">My Profile</a>
                                </li>
                                <li>
                                    <span class="material-icons icons-size">mode</span>
                                    <a href="student_editprofile.php">Edit Account</a>
                                </li>
                                <li>
                                    <span class="material-icons-outlined">logout</span>
                                    <a href="../mysql/student_logout.php">Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mid-container">
                        <form class="select-box" action = "view_result.php" method = "POST">
                            <label for="prn">Enter PRN</label></br>
                            <input type="number" name="prn" id="" placeholder="Your college PRN">
                            </br></br>
                            <label for="year">Enter Your Batch Year</label></br>
                            <input type="text" name="year" id="" placeholder="Batch Year , Eg : 2020">
                            </br></br>
                            <label>Choose Course</label></br>
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

                            <label>Semester</label></br>
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

                            <div>
                                <button type = 'submit' class="btn1">View Result</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function menuToggle() {
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>

</body>

</html>