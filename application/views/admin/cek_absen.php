 <section class="content-header">
          <h1>
            Koreksi Absen
            <small>Siswa magang</small>
          </h1>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
          <div class="box">
                <div class="box-header">
                <?php foreach ($identitas as $value): ;?>
                  <h3 class="box-title"><b>Nis&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $value->nis;?> </b></h3><br>
                  <h3 class="box-title"><b>Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $value->nama;?></b></h3><br>
                  <h3 class="box-title"><b>Asal Sekolah &nbsp;: <?php echo $value->asal_sekolah;?></b></h3>
                  <?php endforeach; ?>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Masuk</th>
                        <th>Keluar</th>
                        <th>Kegiatan</th>
                        <th>keterangan</th>
                        <th>Action</th>
                        <th>Penilaian</th>
                      </tr>
                       <?php
                        $no='1';
                        foreach ($detail_absen as $key) {
                      ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $key->tanggal;?></td>
                      <td><?php echo $key->waktu_in;?></td>
                      <td><?php echo $key->waktu_out;?></td>
                      <td width="400"><?php echo $key->jenis_kegiatan;?></td>
                      <td><?php echo $key->keterangan;?></td>
                      <?php if($key->sts_keterangan==1){ ?>
                      <td></td>
                      <td> <button type="submit" name="valide" class="btn btn-success">Valide</button></td>
                      <?php } else{ ?>
                      <td><a href="<?php echo base_url().'index.php/c_admin/edit_absen/'.$key->id_detail;?>" class="btn btn-primary">Perbaiki</a>
                      </td>
                      <td>
                      <form method="POST" action="<?php echo base_url();?>index.php/c_admin/save_nilai" enctype="multipart/form-data">
                      <input type="hidden" name="id_absen" value="<?php echo $key->id_absen;?>">
                      <button type="submit" name="invalide" class="btn btn-danger">Invalide</button>
                      <button type="submit" name="valide" class="btn btn-success">Valide</button>
                      </form>
                      </td>
                      <?php } ?>
                      </tr>
                    <?php } ?>
                  </table>
                  <!-- <div class="box-tools">
                    <ul class="pagination pagination-sm no-margin pull-right">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div> -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
