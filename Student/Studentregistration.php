<?php
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register - DYPIU</title>
    <link rel="stylesheet" href="css/studentregister.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon-16x16.png" />
    <link rel="shortcut icon" type="image/png" href="images/favicon-32x32.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
        <h2>Create Your Account !!!</h2>
        <div class="main-wrap">
            <div class="box-container">
                <div class="img-box">

                </div>
                <div class="form-wrap">
                    <!--<div class="top-signup">
                        <span>Don't you have an account?</span>
                        <a href="#" class="signup-btn">SIGN UP</a>
                    </div> -->
                    <div class="mid-container">
                        <h2>Student Registration</h2>
                        <h6>Register only with your DYPIU mail ID <span class="ass">*</span></h6>
                        
                    <form action="../mysql/StudentRegistrationmysql.php" class="form" method="post">
                        <label for="name">Name</label></br>
                        <input type="text" name="name" id="name" placeholder="Your full-name">
                        </br>
                        <label for="mail">Email</label></br>
                        <input type="email" name="mail" id="email" placeholder="Your DYPIU Mail">
                        </br>
                        <label for="id">DYPIU PRN</label></br>
                        <input type="text" name="id" id="id" placeholder="Your DYPIU PRN">
                        </br>
                        <label for="Password">Password</label></br>
                        <input type="password" name="password" id="password" placeholder="Your password">
                        <br>
                        <button type="submit" class="login-btn">Register</button>
                    </form>
                </div>
                <div class="or">
                    <h5>---------- OR ----------</h5>
                </div>
                <div class="login-with">
                    <button class="btn1"><a href="Studentlogin.php">Student Login</a></button>
                    <button class="btn1"><a href="../faculty/facultyregistration.php">Faculty Register</a></button>
                    <button class="btn1"><a href="../faculty/facultylogin.php">Faculty Login</a></button>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>