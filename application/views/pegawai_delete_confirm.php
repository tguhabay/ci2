<h1><?php echo $title;?></h1>
 
<?php
echo form_open('pegawai/delete_confirm');
echo "<p><label for='ptitle'>Nama : $pegawai[nama] </label><br/><br>";
echo form_hidden('id',$pegawai['id']);
echo form_submit('confirm','Hapus');
echo form_submit('confirm','Batal');
echo form_close();
 
?>