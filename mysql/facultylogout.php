<?php
session_start();
unset($_SESSION['active_email_fac']);
unset($_SESSION['active_name_fac']);
unset($_SESSION['avatar']);
session_destroy();
header("location:../faculty/facultylogin.php");
?>