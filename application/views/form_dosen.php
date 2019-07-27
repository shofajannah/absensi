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
                 
                     <h3>Data Absen Siswa Magang <span class="label label-success">: 7 hari</span></h3>
                      
                   <div class="hr-div"> <hr /></div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>ID Absen</th>
                                            <th>Tgl Chek In</th>
                                            <th>Tgl Chek Out</th>
                                            <th>Jenis Kegiatan</th>
                                            <th>Status Absen</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $no = '1';
                                    foreach ($detail as $key) { ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $key->nis;?></td>
                                            <td><?php echo $key->id_absen;?></td>
                                            <td><?php echo $key->waktu_in;?></td>
                                            <td><?php echo $key->waktu_out;?></td>
                                            <td><?php echo $key->jenis_kegiatan;?></td>
                                            <td><?php if ($key->status =='1'){
													echo "<span class='label label-warning'>Hadir</span>";
												}else{
													echo "<span class='label label-success'>Sudah Pulang</span>";
												}?></td>
											</td>
                                        </tr>
                              			<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        <ul class="pagination">
  <li class="disabled"><a href="#">&laquo;</a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">&raquo;</a></li>
</ul>
                     
                    </div>