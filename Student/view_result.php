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
    <link rel="stylesheet" href="css/viewresult.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon-16x16.png" />
    <link rel="shortcut icon" type="image/png" href="images/favicon-32x32.png" />
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
                
                <div class="reg">
                    <div class="title">Semester Result</div>
                    <!--<div class="img-box">

                </div>-->
                    <div class="form-wrap">
                        <!--<div class="top-signup">
                        <span>Don't you have an account?</span>
                        <a href="#" class="signup-btn">SIGN UP</a>
                    </div> -->
                        <?php
                            $al=mysqli_connect("localhost","root","","resultdypiu");

                            session_start();
                            
                            $prn = $_POST['prn'];
                            $year = $_POST['year'];
                            $course = $_POST['course'];
                            $sem = $_POST['sem'];

                            $string = str_replace(' ', '', $course);
                            $string1 = str_replace('.', '', $string);

                            $string2 = str_replace('-', '', $sem);
                            

                            $table = $year.$string1;
                            $table = $table.$string2;
                            $table = strtolower($table);

                            $branch = '';
                            $_SESSION['active_table'] = $table; 
                            $_SESSION['active_sem'] = $sem;
                            $_SESSION['active_course'] = $course;


                            $sql = mysqli_query($al,"select * from student_myprofile where email = '".$_SESSION['active_email']."';");
                            $result = mysqli_num_rows($sql);
                            if ($result > 0){
                                while($row = mysqli_fetch_assoc($sql)){
                                    $branch = $row['branch'];
                                    ?>


                        <div class="student-label">
                            <label class="name">Name: </label>
                            <label id = 'pdf-name'><?php echo $row['fullname']; ?></label>
                            <label class="prn">PRN No.: </label>
                            <label><?php echo $row['prn']; ?></label><br><br>
                            <label class="email">E-mail: </label>
                            <label><?php echo $row['email']; ?></label>
                            <label class="branch">Branch: </label>
                            <label><?php echo $row['branch']; ?></label><br><br>
                            <label class="semester">Semester: </label>
                            <label><?php echo $sem; ?></label>
                        </div>
                        <?php   }
                                }      
                            ?>
                        <div class="action">
                            <div class="profile" onclick="menuToggle();">
                                <img src="../<?php echo $_SESSION['avatar']; ?>" alt="">
                            </div>

                            <div class="menu">
                                <h3>
                                    <?php echo $_SESSION['active_name']; ?>
                                    <div>
                                        <?php echo $branch; ?>
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
                        <div class="pdf" id = 'invoice'>
                            <table class="content-table">
                                <thead>
                                    <tr>
                                        <td>Sno</td>
                                        <td>Course Name</td>
                                        <td>Course ID</td>
                                        <td>Grade</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php
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

                                        //Fetching marks from the result table.
                                        $sql2 = mysqli_query($al,"select ".$subjects." from ".$table." where email = '".$_SESSION['active_email']."' ;");
                                        $result1 = mysqli_num_rows($sql2);
                                        $marks = [];
                                        $i = 0;
                                        if($result1 > 0){
                                            while($row1 = mysqli_fetch_assoc($sql2)){
                                                foreach($row1 as $key => $value) {
                                                    
                                                    $marks[$i] =  $value;
                                                    $i++;
                                                }
                                            }
                                        }
                                        

                                        $sql = mysqli_query($al,"select * from subjects where semester = '".$sem."' and course = '".$course."';");
                                        $result2 = mysqli_num_rows($sql);
                                        $i = 0;
                                        if ($result2 > 0){
                                            while($row = mysqli_fetch_assoc($sql)){
                                                $s = str_replace('_',' ',$row['subjects']);
                                                echo '<tr class="active-row"><td>'.$row['sno'].'</td><td>'.$s.'</td><td>'.$row['subjectid'].'</td><td>'.$marks[$i].'</td></tr>';
                                                $i++;
                                            }
                                        }        
                                    ?>
                                    
                                </tbody>
                            </table>
                            </div>
                        </div>
                        
                        <div>
                            <button type="button" class="button"><a href = 'pdf.php'>
                                <span class="button__text">Get PDF</span>
                                <span class="button__icon">
                                    <ion-icon name="cloud-download-outline"></ion-icon>
                                </span>
                                </a>
                            </button>
                        </div>
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
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>

</html>