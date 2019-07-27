<div align="center">
<table>
<tr>
	<th>No</th>
	<th>NIS</th>
	<th>Nama</th>
	<th>Asal Sekolah</th>
	<th>Foto</th>
	<th>Password</th>
	<th>Opsi</th>
</tr>
	<?php
		$no='1';
		foreach ($data_absen as $key) { 
	?>
<tr>
	<td><?php echo $no++;?></td>
	<td><?php echo $key->nis;?></td>
	<td><?php echo $key->nama;?></td>
	<td><?php echo $key->asal_sekolah;?></td>
	<td><img class="foto1" id="foto" src="<?php echo base_url().'asset/foto/'.$key->foto;?>"></td>
	<th>123456qwerty</th>
	<td><a href="<?php echo base_url() . "index.php/c_dosen/updatedosen/" . $key->id_siswa; ?>"> Edit</a>
						<?php echo anchor('c_dosen/hapus/'.$key->nis,'Hapus'); ?></td>
</tr>
<?php } ?>
</table>
</div>