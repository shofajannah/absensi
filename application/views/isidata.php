<div class="col-lg-9 col-md-9 col-sm-9">
                    <form method="POST" action="<?php echo base_url();?>index.php/c_dosen/kirim_pesan">
                    <h3>Sampaikan Pesan Anda di sini<span class="label label-success"></span></h3> 
                   <div class="hr-div"> <hr /></div>
                        <div class="form-group col-lg-7 col-md-7 col-sm-7">
                            <label>Judul pesan</label>
                            <input type="text" name="judul_pesan" class="form-control" required="required" placeholder="Judul Pesan " />
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <label>Isi pesan</label>
                            <textarea class="form-control" required="required" rows="5" name="isi_pesan" placeholder="Sampaikan keluhan anda disini dengan detail " ></textarea>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" name="kirim" class="btn btn-primary">Kirim Pesan ke Admin</button>
                        </div>
                    </form>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                    <label>* Data pesan limit 5 Pesan</label>
                    <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Pesan ID</th>
                                            <th>Judul pesan</th>
                                            <th>Isi Pesan</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pesan as $key) { ?>
                                        <tr>
                                            <td><?php echo $key->pesan_id;?></td>
                                           <td><?php echo $key->judul_pesan;?></td>
                                            <td><?php echo $key->isi_pesan;?></td>
                                            <td><?php echo $key->tanggal;?></td>
                                            <td><?php if ($key->status_pesan =='1'){
                                                    echo "<span class='label label-danger'>Terkirim</span>";
                                                }else{
                                                    echo "<span class='label label-success'>Sudah Dibaca</span>";
                                                }?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                    </div>