<?php
include("sesi_admin.php");
include("../inc/koneksi.php");
//mendeskripsikan variable
$kodeBarang=$_POST['inputKode'];
$namaBarang=$_POST['inputNama'];
$kodeJenis=$_POST['inputKodeJenis'];
$hargaBeli=$_POST['inputHargaBeli'];
$hargaJual=$_POST['inputHargaJual'];
$stokBarang=$_POST['inputStok'];

//simpan
if(isset($_POST['btnSimpan'])){
		$query=mysql_query("
		insert into tbbarang set
		kodebarang='$kodeBarang',
		namabarang='$namaBarang',
		kodejenis='$kodeJenis',
		hargabeli='$hargaBeli',
		hargajual='$hargaJual',
		stok='$stokBarang'
		") or die(mysql_error());
		
		header("Location:index.php?menu=tampil_barang");
}

?>