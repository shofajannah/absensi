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
                 
                     <h3>Profile <span class="label label-success"></span></h3>
                      
                   <div class="hr-div"> <hr /></div>

                        <div class="alert alert-info">
                        <div class="media">
                        <div class="pull-left">
                            <img src="<?php echo base_url().'asset/foto/'.$foto;?>" class="img-responsive" />
                        </div>
                        <?php foreach ($profile as $key) :?>
                            
                        <div class="media-body">
                            <label>&nbsp;</label>
                            <h3 class="media-heading">&nbsp;&nbsp;&nbsp;NIS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $key->nis;?></h3>
                                <h3 class="media-heading">&nbsp;&nbsp;&nbsp;NAMA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $key->nama;?></h3>
                                <h3 class="media-heading">&nbsp;&nbsp;&nbsp;SEKOLAH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $key->asal_sekolah;?></h3>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <!-- <a href="<?php echo base_url();?>index.php/c_dosen/absen" class="btn btn-success">Klik TO Detail Profile >></a> -->
                            </div>
                        </div>
                    <?php endforeach ?>
                    </div> 
                    </div>
                     <div class="hr-div"> <hr /></div>
                    </div>  

