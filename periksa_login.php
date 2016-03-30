<?php
session_start();
//Membaca variabel
$idPetugas=$_POST['inputIdPetugas'];
$password=$_POST['inputPassword'];
//cegah mysql injection
$idPetugas=stripslashes($idPetugas);
$password=stripslashes($password);
$idPetugas=mysql_real_escape_string($idPetugas);
$password=mysql_real_escape_string($password);
//panggil koneksi
include("inc/koneksi.php");
//periksa id petugas dan password, apakah terdapat di database?
$query=mysql_query("select * from tbpetugas where idpetugas='$idPetugas' and password=md5('$password')") or die (mysql_error());
//cek jumlah baris/record
$hasil=mysql_fetch_array($query);
$level=$hasil['level'];
$cek=mysql_num_rows($query);
if($cek==1){
	$_SESSION['sesi_id']=$idPetugas;
	$_SESSION['sesi_level']=$level;
	if($_SESSION['sesi_level']=="admin"){
		header("Location:admin/index.php");
	    }
		else if($_SESSION['sesi_level']=="kasir"){
		header("Location:kasir/index.php");
		}
		else if($_SESSION['sesi_level']=="direktur"){
		header("Location:direktur/index.php");	
		}
		
	//header("Location:home.php");
	//mengarah ke home,,,
}
else {
	echo "salah";
	header("Location:login.php");//tetap di login,,,
}
?>