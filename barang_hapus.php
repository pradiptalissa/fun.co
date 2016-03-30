<?php
include"../inc/koneksi.php";
$hapus=mysql_query("delete from tbbarang order by kodebarang limit 1") or die (mysql_error());
header ("location:index.php?page=tampil_barang");
?>