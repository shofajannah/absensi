<?php
if (isset($this->session->userdata['logged_in'])) {
$nama = ($this->session->userdata['logged_in']['nama']);
$foto = ($this->session->userdata['logged_in']['foto']);
} else {
header("location: c_dosen");
}
?>
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url();?>asset/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $nama;?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="<?php echo base_url();?>index.php/c_admin">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Berita</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url();?>index.php/c_admin/data_berita"><i class="fa fa-circle-o"></i> Data Berita</a></li>
                <li><a href="<?php echo base_url();?>index.php/c_admin/isi_berita"><i class="fa fa-circle-o"></i> Isi Berita</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Anggota Magang</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url();?>index.php/c_admin/daftar_anggota"><i class="fa fa-circle-o"></i> Daftar Anggota</a></li>
                <li><a href="<?php echo base_url();?>index.php/c_admin/data_anggota"><i class="fa fa-circle-o"></i> Data Anggota</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Absen Anggota</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url();?>index.php/C_admin/sudah_absen"><i class="fa fa-circle-o"></i>Anggota Sudah Absen</a></li>
                <li><a href="<?php echo base_url();?>index.php/C_admin/belum_absen"><i class="fa fa-circle-o"></i>Anggota Belum Absen</a></li>
                <li><a href="<?php echo base_url();?>index.php/C_admin/absen_status"><i class="fa fa-circle-o"></i>Anggota Status</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo base_url();?>index.php/c_admin/pesan">
                <i class="fa fa-envelope"></i> <span>Pesan</span>
                <small class="label pull-right bg-yellow"></small>
              </a>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>User</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url();?>index.php/c_admin/daftar_user"><i class="fa fa-circle-o"></i>Daftar User</a></li>
                <li><a href="<?php echo base_url();?>index.php/c_admin/data_user"><i class="fa fa-circle-o"></i>Data User</a></li>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>