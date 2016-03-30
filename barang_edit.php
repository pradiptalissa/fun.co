<?php
$no=@$_GET['kodebarang'];
if(isset($_POST['input'])){
	$nm=$_POST['namabarang'];
	$kdjn=$_POST['kodejenis'];
	$hgb=$_POST['hargabeli'];
	$hgj=$_POST['hargajual'];
	$stok=$_POST['stok'];
	$query=mysql_query("update tbbarang set namabarang='$nm', kodejenis='$kdjn', hargabeli='$hgb', hargajual='$hgj', stok='$stok' where kodebarang='$no'") or die (mysql_error());
	if($query){
		echo'<script>alert("Data Berhasil Diubah")</script>';
		echo"<meta http-equiv='refresh' content='0;url=?page=barang_view'>";
		}
	else{
		echo'<script>alert("Gagal Ubah Data")</script>';
	}
	
}
?>

<font color="#0033FF"><strong>Edit Data Barang</strong></font><hr />
<br>
<?php
include "../inc/koneksi.php";
$query=mysql_query("select * from tbbarang where kodebarang='$no'") or die (mysql_error());
$edit=mysql_fetch_object($query);
?>
<form name="barang_edit" method="post" >
<table width="710" >
	 <tr>
    <td width="182" height="41">Kode Barang</td>
    <td width="15">:</td>
    <td width="497"><input type="text" class="form-control" name="kodebarang" readonly value="<?php echo $edit->kodebarang ?>"></td>
  </tr>
    <tr>
    <td width="182" height="41">Nama Barang</td>
    <td width="15">:</td>
    <td width="497"><input type="text" class="form-control" name="namabarang" required value="<?php echo $edit->namabarang ?>"></td>
  </tr>
  <tr>
    <td height="41">Kode Jenis</td>
    <td>:</td>
    <td><select name="kodejenis" class="form-control" required>
    <option value="">-Pilih Jenis-</option>
    <?php
	$query2=mysql_query('select * from tbjenis') or die(mysql_error());
	while($data=mysql_fetch_array($query2)) {
		?>
		<option value="<?php echo $data['kodejenis'] ?>"><?php echo $data['kodejenis'] ?>-<?php echo $data['jenis'] ?></option>
		<?php
	}
	?>
    </select></td>
  </tr>
  <tr>
    <td height="36">Harga Beli</td>
    <td>:</td>
    <td><input type="text" name="hargabeli" class="form-control" value="<?php echo $edit->hargabeli ?>" required></td>
  </tr>
  <tr>
    <td>Harga Jual</td>
    <td>:</td>
    <td><input type="text" name="hargajual" class="form-control" value="<?php echo $edit->hargajual ?>" required></td>
  </tr>
  <tr>
    <td height="40">Stok Barang</td>
    <td>:</td>
    <td><input type="text" name="stok" class="form-control" value="<?php echo $edit->stok ?>" required></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="34">&nbsp;</td>
    <td>&nbsp;</td>
    <td><input class="btn btn-primary" type="submit" value="Edit Data" name="input"> 
        <input class="btn btn-primary" type="button" value="Batal"  onClick="javascript:history.back()"></td>
  </tr>
</table>
</form>