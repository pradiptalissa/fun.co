<?php
if(isset($_GET['menu'])){
switch($_GET['menu']){
	case 'input_barang' : include("barang_tambah.php"); break;
	case 'simpan_barang' : include("barang_simpan.php"); break;
	case 'tampil_barang' : include("barang_tampil.php"); break;
	case 'hapus_barang' : include("barang_hapus.php"); break;
	case 'edit_barang' : include("barang_edit.php"); break;
}
}
?>