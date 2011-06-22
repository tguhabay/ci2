<h1><?php echo $title;?></h1>
<form id="form1" name="form1" method="post" action="<?=base_url()?>index.php/pegawai/edit">
<table width="400" border="1">
<tr>
<td colspan="2"><div align="center"><strong>Edit Data Pegawai </strong></div></td>
</tr>
<tr>
<td colspan="2">
<?php
if ($this->session->flashdata('message')){
echo "<i>".$this->session->flashdata('message')."</i>";
}
?>
</td>
</tr>
<tr>
<td>NIP</td>
<td><input name="nip" type="text" id="nip" value="<?=$pegawai['nip'];?>"/></td>
</tr>
<tr>
<td>Nama</td>
<td><input name="nama" type="text" id="nama" value="<?=$pegawai['nama'];?>" /></td>
</tr>
<tr>
<td>Pekerjaan</td>
<td><input name="pekerjaan" type="text" id="pekerjaan" value="<?=$pegawai['pekerjaan'];?>" /></td>
</tr>
<tr>
<td>Alamat</td>
<td><input name="alamat" type="text" id="alamat" value="<?=$pegawai['alamat'];?>" /></td>
</tr>
<tr>
<input type="hidden" value="<?=$pegawai['id']?>" name="id" />
<td>&nbsp;</td>
<td><input name="Submit" type="submit" id="Tambah" value="Edit" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="<?=base_url()?>index.php/pegawai/">Ke halaman depan >> </a></td>
</tr>
</table>
</form>