<?php
if (isset($this->session->userdata['logged_in'])) {
$nis = ($this->session->userdata['logged_in']['nis']);
$nama = ($this->session->userdata['logged_in']['nama']);
$foto = ($this->session->userdata['logged_in']['foto']);
} else {
header("location: c_dosen");
}
?>
<div class="col-lg-9 col-md-9 col-sm-9 ">

                   <h3>Ganti Password</h3>
                      <div class="hr-div"> <hr /></div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            <form method="POST" action="<?php echo base_url();?>index.php/c_dosen/prosess_gantipassword">
                      <input type="hidden" name="nis" value="<?php echo $nis;?>">
                        <div class="form-group">
                            <input type="password" name="password_lama" class="form-control" required="required" placeholder="Password lama" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_baru"class="form-control" required="required" placeholder="Password baru" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="ulangi_password"class="form-control" required="required" placeholder="Ulangi Password baru" />
                        </div>

                        <div class="form-group">
                            <input type="submit" name="ganti" class="btn btn-primary" value="Ganti Password">
                        </div>
                    </form>
                        
                        </div>
                    

                </div>