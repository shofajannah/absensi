<section class="content-header">
         <h1>
           Perbaiki Absen
         </h1>
</section>

<section class="content">
         <div class="row">
             <div class="col-xs-12">
         <div class="box">
               <div class="box-header">
                 <h3 class="box-title">Memperbaiki Detail Absen</h3>
               </div><!-- /.box-header -->
                   <form method="POST" action="<?php echo base_url();?>index.php/c_admin/update_absen" enctype="multipart/form-data">
                       <input type="hidden" class="form-control" name="id_absen"  value="<?php echo $absen->row("id_absen"); ?>">
                        <?php //foreach ($edit_absen as $absen): ;?>
                     <div class="box-body">
                       <div class="form-group">
                         <label for="exampleInputEmail1">Waktu Masuk</label>
                         <input type="text" class="form-control" name="waktu_in" id="exampleInputEmail1" value="<?php echo $absen->row("waktu_in"); ?>">
                       </div>
                       <div class="form-group">
                         <label for="exampleInputEmail1">Waktu Keluar</label>
                         <input type="text" class="form-control" name="waktu_out" id="exampleInputEmail1" value="<?php echo $absen->row("waktu_out"); ?>">
                       </div>
                       <div class="form-group">
                         <label for="exampleInputEmail1">Kegiatan</label>
                         <div class="box-body pad">
                             <textarea class="textarea" name="jenis_kegiatan" placeholder="Isikan kegiatan" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $absen->row("jenis_kegiatan");?></textarea>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="exampleInputEmail1">Keterangan</label>
                         <div class="box-body pad">
                             <textarea class="textarea" name="keterangan" placeholder="Isikan keterangan" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $absen->row("keterangan");?></textarea>
                         </div>
                     </div>
                       <div class="row">
                       <div class="col-xs-8">
                         <div class="checkbox icheck">
                         </div>
                       <div class="box-footer">
                       <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </div>
                <?php //endforeach; ?>
                   </form>
             </div><!-- /.box -->
           </div><!-- /.col -->
         </div><!-- /.row -->
       </section><!-- /.content -->
