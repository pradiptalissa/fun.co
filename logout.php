<?php
session_start();
$_SESSION['sesi_id']="";
$_SESSION['sesi_level']="";
session_destroy();
header("Location:login.php");
?>