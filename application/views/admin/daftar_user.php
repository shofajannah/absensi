<section class="content-header">
          <h1>
            Form Register User
            <small>Admin Magang ITS</small>
          </h1>
</section>

<!-- Main content -->
        <section class="content">
          <div class="row" >
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Daftar Disini</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="<?php echo base_url();?>index.php/c_admin/save_user" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="Usename">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" name="alamat" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Upload Profile</label>
                      <input type="file" name="foto" id="exampleInputFile">
                    </div>
                    <div class="row">
                    <div class="col-xs-8">
                      <div class="checkbox icheck">
                      </div>
                    <div class="box-footer">
                    <button type="submit" name="simpan" class="btn btn-primary">Daftar</button>
                  </div>
                </form>
              </div><!-- /.box -->
              </div>
              </div>
              
              </section>
              