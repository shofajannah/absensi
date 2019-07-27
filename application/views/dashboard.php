<?php
if (isset($this->session->userdata['logged_in'])) {
$nis = ($this->session->userdata['logged_in']['nis']);
$nama = ($this->session->userdata['logged_in']['nama']);
$foto = ($this->session->userdata['logged_in']['foto']);
} else {
header("location: c_dosen");
}
?>
<div class="col-lg-9 col-md-9 col-sm-9">
                 
                    <h3>Selamat Datang <?php echo $nama;?> :)<span class="label label-success"></span></h3>
                    <?php foreach ($data_berita as $key) { ?>
                    <div class="hr-div"> 
                         <h4>Berita Terbaru</h4> <p><?php echo $key->judul_berita; ?></p>
                         <?php echo $key->isi_berita; ?> 
                    </div>	
                    <?php } ?>
                    </div>


