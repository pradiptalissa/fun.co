<?php
if(isset($_SESSION['sesi_id'])){
	if($_SESSION['sesi_level']<>"admin"){
			echo "Maaf Anda tidak berhak mengakses halaman ini! Silahkan login dulu ! <a href='../login.php'> LOGIN </a>";
			exit;
	    }
		
}
else {
	header("location:../login.php");
}
?>