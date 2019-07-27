<section class="content-header">
          <h1>
            Form Isi Berita
            <small>Preview</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Isi Berita</li>
          </ol>
        </section>

        <section class="content">

          <!-- SELECT2 EXAMPLE -->
          <form method="post" action="<?php echo base_url();?>index.php/c_admin/save_berita" enctype="multipart/form-data">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Isi Berita</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->

            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Judul Berita</label>
                      <input type="text" name="judul_berita" class="form-control" id="exampleInputEmail1" placeholder="Judul Berita">
                    </div>
                    </div>
                    <div class="col-md-6">
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control select2" name="status" style="width: 100%;">
                      <option selected="selected" value="Aktif">Aktif</option>
                      <option value="Nonaktif">Non Aktif</option>
                    </select>
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.box-body -->
          </div><!-- /.box -->

           <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Isi Berita<small></small></h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body pad">
                    <textarea class="textarea" name="isi_berita" placeholder="Isikan berita disini" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-8">
                  <div class="checkbox icheck">
                  </div>
                  </div><!-- /.col -->
                <div class="col-xs-4">
                  <button type="submit" name="simpan" class="btn btn-primary btn-block btn-flat">Post</button>
                </div><!-- /.col -->
              </div>
              </form>
          </section>
