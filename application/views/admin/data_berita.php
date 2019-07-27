 <section class="content-header">
          <h1>
            Data Berita
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
</section>

<section class="content">
          <div class="row">
              <div class="col-xs-12">
          <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Beberapa berita yang dibuat</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Judul Berita</th>
                        <th>Isi Berita</th>
                        <th>Status</th>
                        <th colspan="2">Perintah</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                          $no='1';
                          foreach ($berita as $brt) {
                        ?>
                      <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $brt->judul_berita;?></td>
                        <td><?php echo $brt->isi_berita;?></td>
                        <?php if($brt->status=="Aktif"){?><td><center><input type="button" class="btn btn-success" value="Aktif"></center></td> <?php }else{?> <td><center><input type="button" class="btn btn-danger" value="Nonaktif"></center></td> <?php }?>
                        <td><a href="<?php echo base_url().'index.php/c_admin/editberita/'.$brt->id_berita;?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo base_url().'index.php/c_admin/hapusberita/'.$brt->id_berita;?>" class="btn btn-primary">Hapus</a></td>
                      </tr>
                      <?php } ?>
                  </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
