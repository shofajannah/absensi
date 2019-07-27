<div class="form">
        <h2 align="center"> Form Chek-In Chek-Out</h2>
        <?php echo @$pesan; ?>
            <div class="form_cek" align="center">
                <form method="POST" action="<?php echo base_url();?>index.php/c_dosen/save_dosen" enctype="multipart/form-data">
                <div class="input">
                    <input type="text" id="nama" name="nama" placeholder="Nama">
                    <input type="text" id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah" >
                    <input type="file" id="foto" name="foto" placeholder="foto" >
                    <div class="submit">
                        <input type="submit" id="button_in" value="Simpan" name="simpan">
                    </div>
                </div>
                </form>
            </div>
</div>