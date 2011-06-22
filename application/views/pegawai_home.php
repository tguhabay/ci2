<h1><?php echo $title;?></h1>
<p><a href="<?=base_url()?>index.php/pegawai/add">Tambah Pegawai</a></p>
 
<?php
if ($this->session->flashdata('message')){
echo "<p><i>".$this->session->flashdata('message')."</i></p>";
}
?>
<table width="450" border="1">
<tr>
<td width="27">NIP</td>
<td width="99">Nama</td>
<td width="101">Pekerjaan</td>
<td width="91">Alamat</td>
<td width="98">Aksi</td>
</tr>
<?php
if (count($pegawai)){
foreach ($pegawai as $key => $list){
?>
<tr>
<td><?=$list['nip'];?></td>
<td><?=$list['nama'];?></td>
<td><?=$list['pekerjaan'];?></td>
<td><?=$list['alamat'];?></td>
<td><a href="<?=base_url()?>index.php/pegawai/edit/<?=$list['id'];?>">Edit</a> | <a href="<?=base_url()?>index.php/pegawai/delete/<?=$list['id'];?>">Hapus </a></td>
</tr>
<?php
}
}
?>
<tr>
<td colspan="4">Total Pegawai </td>
<td><?=count($pegawai);?></td>
</tr>
</table>
<p>&nbsp; </p>
