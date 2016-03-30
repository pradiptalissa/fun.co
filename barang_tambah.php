<?php
include "sesi_admin.php";
?>
<h2 class="page-header">INPUT DATA BARANG</h2>
<form class="form-horizontal" method="post" action="?menu=simpan_barang">
  <div class="form-group">
    <label for="inputKode" class="col-sm-2 control-label">Kode Barang</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputKode" name="inputKode" placeholder="Kode Barang" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="inputNama" class="col-sm-2 control-label">Nama Barang</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputNama" name="inputNama" placeholder="Nama Barang" required="required">
    </div>
  </div>
   <div class="form-group">
    <label for="inputNama" class="col-sm-2 control-label">Jenis Barang</label>
    <div class="col-sm-10">
    	<select id="inputKodeJenis" name="inputKodeJenis" class="form-control" required="required">
    <?php
	include("../inc/koneksi.php");
	$query=mysql_query("select * from tbjenis") or die(mysql_error());
	while($data=mysql_fetch_array($query)){
		$kodeJenis=$data['kodejenis'];
		$jenis=$data['jenis'];
		?>
        <option value="<?php echo $kodeJenis; ?>"><?php echo $jenis; ?></option>
        <?php
	}
	?>
    </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputHargaBeli" class="col-sm-2 control-label">Harga Beli</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputHargaBeli" name="inputHargaBeli" placeholder="Harga Beli" required="required">
    </div>
  </div>
  
   <div class="form-group">
    <label for="inputHargaBeli" class="col-sm-2 control-label">Harga Jual</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputHargaJual" name="inputHargaJual" placeholder="Harga Jual" required="required">
    </div>
  </div>
  
   <div class="form-group">
    <label for="inputStok" class="col-sm-2 control-label">Stok</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputStok" name="inputStok" placeholder="Stok" required="required">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="btnSimpan">Simpan</button>
    </div>
  </div>
</form>