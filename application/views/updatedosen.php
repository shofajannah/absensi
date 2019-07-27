<div class="form">
        <h2 align="center"> Form Edit</h2>
        <?php echo @$pesan; ?>
            <div class="form_cek" align="center">
                <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
                <form method="POST" action="<?php echo base_url();?>index.php/c_dosen/update">
                <div class="input">
                <?php foreach ($updatedosen as $key):?>
                    <input type="hidden" id="id_siswa" name="id_siswa" value="<?php echo $key->id_siswa;?>">
                    <input type="text" id="nis" name="nis" readonly value="<?php echo $key->nis;?>">
                    <input type="text" id="nama" name="nama" value="<?php echo $key->nama;?>">
                    <input type="text" id="asal_sekolah" name="asal_sekolah" value="<?php echo $key->asal_sekolah;?>">
                    <div class="submit">
                        <input type="submit" id="button_in" value="Update" name="update">
                        <input type="reset" id="button_reset" value="Reset" name="reset">
                    <?php endforeach;?>
                    </div>
                </div>
                </form>
            </div>
</div>