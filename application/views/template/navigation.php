
<?php
if (isset($this->session->userdata['logged_in'])) {
?>
<div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="list-group">
                        <a href="#" class="list-group-item active">Menu Absent
                        </a>

                      
                        <a href="<?php echo base_url();?>" class="list-group-item">My Dashboard</a>
                        <a href="<?php echo base_url();?>index.php/c_dosen/profile" class="list-group-item">Profile</a>
                        <a href="<?php echo base_url();?>index.php/c_dosen/absen" class="list-group-item">Absen</a>
                        <a href="<?php echo base_url();?>index.php/c_dosen/detaildata_absen" class="list-group-item">Data Absen</a>
                        <a href="<?php echo base_url();?>index.php/c_dosen/pesan" class="list-group-item">Pesan</a>
                        <a href="<?php echo base_url();?>index.php/c_dosen/ganti_password" class="list-group-item">Ganti Password</a>
                        <a href="<?php echo base_url();?>index.php/c_dosen/logout" onclick="return confirm('Anda Yakin keluar sekarang')" class="list-group-item"><strong><span class='label label-danger'>Logoutnya disini ya !!</span></strong> </a>
                    </div>
                    <div class="alert alert-danger text-center">
                        <h3>Cek Waktu Anda</h3>
                      <div id="clock" align="center" class="table"></div>
			<script type="text/javascript">
			function showTime() {
				var a_p = "";
				var today = new Date();
				var curr_hour = today.getHours();
				var curr_minute = today.getMinutes();
				var curr_second = today.getSeconds();
				if (curr_hour < 12) {
				    a_p = "AM";
				} else {
				    a_p = "PM";
				}
				if (curr_hour == 0) {
				    curr_hour = 12;
				}
				if (curr_hour > 12) {
    			    curr_hour = curr_hour - 12;
				}
				curr_hour = checkTime(curr_hour);
				curr_minute = checkTime(curr_minute);
				curr_second = checkTime(curr_second);
			document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
				}		
			function checkTime(i) {
				if (i < 10) {
					i = "0" + i;
				}
				return i;
			}
			setInterval(showTime, 500);
			</script>  
                    </div>
                    
                </div>
            </div>
<?php } ?>