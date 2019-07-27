<section >
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="<?php echo base_url();?>asset/img/premium.png" class="img-responsive" />
                    <h3>Berita Terbaru</h3>
                    <p>
                        Ini adalah Tampilan Student Absent terbaru, Selanjutnya akan ada terus Perbaikan dan Perkembangan.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="<?php echo base_url();?>asset/img/moniter.png" class="img-responsive img-max-width" />

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h3>Account Login </h3>
                    <form method="POST" action="<?php echo base_url();?>index.php/c_dosen/prosess_login" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="nis" class="form-control" required="required" placeholder="NIS" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" required="required" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" class="btn btn-success" value="Click To Login ">
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section>
    