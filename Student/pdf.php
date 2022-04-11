<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF - DYPIU</title>
    <link rel="stylesheet" href="css/pdf.css">
    <link rel="shortcut icon" type="image/png" href="../images/favicon-16x16.png" />
    <link rel="shortcut icon" type="image/png" href="../images/favicon-32x32.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
</head>

<body>
    
    <div class="container" >
    <section id="invoice" >
        <div class="line">
            <br>
        </div>
        <img class="head" src="images/head.png" >
        <div class="tbs-con">
            <?php
            $al=mysqli_connect("localhost","root","","resultdypiu");

            session_start();

            $table = $_SESSION['active_table'];
            $sem = $_SESSION['active_sem'];
            $course = $_SESSION['active_course'];

            $sql = mysqli_query($al,"select * from student_myprofile where email = '".$_SESSION['active_email']."';");
            $result = mysqli_num_rows($sql);
            if ($result > 0){
            while($row = mysqli_fetch_assoc($sql)){
                $branch = $row['branch'];
                ?>
                <table>
                    <tr>
                        <td>Name : <?php echo $row['fullname']; ?></td>
                        <td>PRN : <?php echo $row['prn']; ?></td>
                    </tr>
                    <tr>
                        <td>Branch : <?php echo $row['branch']; ?></td>
                        <td>Semester : <?php echo $sem; ?></td>
                    </tr>
                </table>
            <?php           }
                                }      
            ?>
        </div>
        <div class="mid-container">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Sr.No.</th>
                        <th>Course Name</th>
                        <th>Course ID</th>
                        <th>Grade</th>
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
                                echo '<tr class="active-row"><td>'.$row['sno'].'</td><td>'.$row['subjects'].'</td><td>'.$row['subjectid'].'</td><td>'.$marks[$i].'</td></tr>';
                                $i++;
                            }
                        }        
                    ?>
                                    
                </tbody>
            </table>
        </div>
        
    </div>
</section>
    <div>
        <button type="button" class="button" id="download">
            <span class="button__text">Download</span>
            <span class="button__icon">
                <ion-icon name="cloud-download-outline"></ion-icon>
            </span>
        </button>
    </div>
    
    <script src="js/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>    

</body>

</html>

