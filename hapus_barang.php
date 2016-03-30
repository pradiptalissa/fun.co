<?php
ob_start();
include "koneksi.php";
mysql_query ("DELETE FROM tbbarang WHERE kodebarang = '$_GET[kodebarang]'");

header ('location:barang_tambah.php');
?> 