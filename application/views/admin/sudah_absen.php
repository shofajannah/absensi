 <section class="content-header">
          <h1>
            Anggota Sudah Absen
            <small>Hari Ini</small>
          </h1>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
          <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Asal Sekolah</th>
                        <th>Check In</th>
                      </tr>

                    </thead>
                    <tbody>
                    <?php
                        $no='1';
                        foreach ($siswa_absen as $key) { 
                      ?>
                      
                      <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $key->nis;?></td>
                        <td><?php echo $key->nama;?></td>
                        <td><?php echo $key->asal_sekolah;?></td>
                        <td><?php echo $key->waktu_in;?></td>
                      </tr>
                      <?php } ?>
                    
                    </tfoot>
                  </table>
                  <div class="box-tools">
                    <ul class="pagination pagination-sm no-margin pull-right">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->