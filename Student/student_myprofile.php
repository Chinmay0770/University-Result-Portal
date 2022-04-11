<?php
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - DYPIU</title>
    <link rel="stylesheet" href="css/studentprofile.css">
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
                <!--<div class="img-box">
                </div>-->
                <div class="reg">
                    <div class="title">My Profile</div>
                    <div class="content">
                        <form action="#">

                            <?php
                                $al=mysqli_connect("localhost","root","","resultdypiu");

                                session_start();


                                $sql = mysqli_query($al,"select * from student_myprofile where email = '".$_SESSION['active_email']."';");
                                $result = mysqli_num_rows($sql);
                                if ($result > 0){
                                    while($row = mysqli_fetch_assoc($sql)){?>
                                        
                                    

                                        <div class="user-details">
                                            <div class="input-box">
                                                <span class="details">Full Name</span>
                                                <input type="text" id = 'name' value= '<?php echo $row['fullname']; ?>'  readonly>
                                            </div>
                                            <div class="input-box">
                                                <span class="details">PRN No.</span>
                                                <input type="number" id = 'prn' value= '<?php echo $row['prn']; ?>' readonly>
                                            </div>
                                            <div class="input-box">
                                                <span class="details">Email</span>
                                                <input type="email" id = 'email' value= '<?php echo $row['email']; ?>' readonly>
                                            </div>
                                            <div class="input-box">
                                                <span class="details">Phone Number</span>
                                                <input type="number" id = 'phone' value= '<?php echo $row['phone']; ?>'readonly>
                                            </div>
                                            <div class="input-box">
                                                <span class="details">Password</span>
                                                <input type="password" id = 'password' value= '<?php echo $row['password']; ?>'readonly>
                                            </div>
                                            <div class="input-box">
                                                <span class="details">Branch</span>
                                                <input type="text" id = 'branch'  value= '<?php echo $row['branch']; ?>'readonly>
                                            </div>
                                        </div>

                                        <div>
                                            <button class="btn1"><a href="student_selectcourse.php">&larr; Back</a></button>
                                            <button class="btn1"><a href="student_editprofile.php">Edit Profile &rarr;</a></button>
                                        </div>
                                    </form>
                            <?php   }
                                }      
                            ?>
                    </div>
                    <!--<div class="form-wrap">
                        <div class="top-signup">
                        <span>Don't you have an account?</span>
                        <a href="#" class="signup-btn">SIGN UP</a>
                    </div>

                        <div class="mid-container">

                        </div>
                        <div>
                            <button class="btn1"><a href="Studentregistration.html">View Result</a></button>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</body>

</html>