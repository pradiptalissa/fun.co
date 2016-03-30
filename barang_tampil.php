<?php
include("sesi_admin.php");
include("../inc/koneksi.php");
?>
<table class="table">
<tr>
	
	<th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Jenis</th>
    <th>Harga Beli</th>
    <th>Harga Jual</th>
    <th>Stok</th>
    <th>Operasi</th>
</tr>
<?php

$query=mysql_query("select * from tbbarang order by kodebarang") or die (mysql_error());
while($data=mysql_fetch_array($query)){
	?>
    <tr>
    <td><?php echo $data['kodebarang']; ?></td>
    <td><?php echo $data['namabarang']; ?></td>
    <td><?php echo $data['kodejenis']; ?></td>
    <td><?php echo $data['hargabeli']; ?></td>
    <td><?php echo $data['hargajual']; ?></td>
    <td><?php echo $data['stok']; ?></td>
    <td><a href="barang_edit.php?kodebarang=<?php echo $data['kodebarang']; ?>">Ubah</a> | <a href="barang_hapus.php">Hapus</a></td>
    </tr>
    <?php
}
?>
</table>