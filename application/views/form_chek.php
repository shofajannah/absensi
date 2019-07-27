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
                      
                   <div class="hr-div"> <hr /></div>
                   <form method="POST" action="<?php echo base_url();?>index.php/c_dosen/cek_absen">
                   		<?php foreach ($cari_absen as $value) {?>	
						<input type="hidden" id="id_absen" name="id_absen" value="<?php echo $value->id_absen;?>">
						<?php }?>
						<input type="hidden" id="nis" name="nis" value="<?php echo $nis;?>">
                   		<?php if(count($cari_absen)>0) { ?>
                   		<div class="alert alert-danger">
                        <div class="media">
                        <div class="pull-left">
                            <img src="<?php echo base_url().'asset/foto/'.$foto;?>" class="img-responsive" />
                        </div>
	                        <div class="media-body">
	                        	<h3 class="media-heading">&nbsp;&nbsp;&nbsp;NIS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $nis;?></h3>
	                            <h3 class="media-heading">&nbsp;&nbsp;&nbsp;NAMA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $nama;?></h3>
	                            
	                         <div class="form-group col-lg-12 col-md-12 col-sm-12"> 
                            <textarea class="form-control" required name="jenis_kegiatan" rows="6" placeholder="Tuliskan Jenis Kegiatan Anda Hari ini" ></textarea>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" name="out" class="btn btn-danger">Klik TO Chek OUT</button>
                            </div>
                    	</div> 
                    	</div>
                    	</div>
                    	<?php } else { ?>
                    	<div class="alert alert-info">
                        <div class="media">
                        <div class="pull-left">
                            <img src="<?php echo base_url().'asset/foto/'.$foto;?>" class="img-responsive" />
                        </div>
	                        <div class="media-body">
	                        	<h3 class="media-heading">&nbsp;&nbsp;&nbsp;NIS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $nis;?></h3>
	                            <h3 class="media-heading">&nbsp;&nbsp;&nbsp;NAMA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $nama;?></h3>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" name="in" class="btn btn-primary">Klik TO Chek IN</button>
                            </div>
	                        </div>
                    	</div> 
                    	</div>
                    	<?php } ?>
                    	</form>
                     <div class="hr-div"> <hr /></div>
                    </div>	