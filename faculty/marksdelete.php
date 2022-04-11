<?php
    error_reporting(0);
    session_start();
    $al = mysqli_connect("localhost","root","","resultdypiu");

    if(isset($_GET['delete_email'])){
        $email = $_GET['delete_email'];

        $sql = "delete from ".$_SESSION['act_table']." where email = '".$email."' ;";
        $result = mysqli_query($al , $sql);
        if($sql){
            header('location:facultydashboard.php');
        }
        else{
            echo 'Delete interupted';
        }
    }
?>