<?php
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile - DYPIU</title>
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
                    <div class="title">Edit Profile</div>
                    <div class="content">
                        <form action="../mysql/student_editprofile_mysql.php" method = "POST">
                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Full Name</span>
                                    <input type="text" name = "name" placeholder="Enter your Full Name" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">PRN No.</span>
                                    <input type="number" name = "prn" placeholder="Enter your PRN" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Email</span>
                                    <input type="email"name = "email"  placeholder="Enter your Email" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Phone Number</span>
                                    <input type="number" name = "phone" placeholder="Enter your Number" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Password</span>
                                    <input type="password" name = "password" placeholder="Enter your Password" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Branch</span>
                                    <input type="text" name = "branch" placeholder="Enter your Branch" required>
                                </div>
                            </div>
                            <!--<div class="gender-details">
                                <input type="radio" name="gender" id="dot-1">
                                <input type="radio" name="gender" id="dot-2">
                                <input type="radio" name="gender" id="dot-3">
                                <span class="gender-title">Gender</span>
                                <div class="category">
                                    <label for="dot-1">
                                        <span class="dot one"></span>
                                        <span class="gender">Male</span>
                                    </label>
                                    <label for="dot-2">
                                        <span class="dot two"></span>
                                        <span class="gender">Female</span>
                                    </label>
                                    <label for="dot-3">
                                        <span class="dot three"></span>
                                        <span class="gender">Prefer not to say</span>
                                    </label>
                                </div>
                            </div>-->
                            <div>
                                <button type='submit' class="btn1">Save</button>
                            </div>
                        </form>
                        <button class="btn1"><a href="view_result.php">&larr; Back</a></button>
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