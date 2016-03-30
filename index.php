<?php
session_start();
if(isset($_SESSION['sesi_id'])){
	if($_SESSION['sesi_level']=="admin"){
		header("Location:admin/index.php");
	    }
		else if($_SESSION['sesi_level']=="kasir"){
		header("Location:kasir/index.php");
		}
		else if($_SESSION['sesi_level']=="direktur"){
		header("Location:direktur/index.php");	
		}
}
else {
	header("location:login.php");
}
?>