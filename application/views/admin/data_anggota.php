<section class="content">
<div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <tr>
                      <th>No</th>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>Asal Sekolah</th>
                      <th>Foto</th>
                    </tr>
                    <?php
                      $no='1';
                      foreach ($siswa as $key) { 
                    ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $key->nis;?></td>
                      <td><?php echo $key->nama;?></td>
                      <td><?php echo $key->asal_sekolah;?></td>
                      <td class="foto-img" ><img size="100" src="<?php echo base_url().'asset/foto/'.$key->foto;?>"></td>
                    </tr>
                    <?php } ?>
                 </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->