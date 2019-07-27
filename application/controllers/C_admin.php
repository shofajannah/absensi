<?php
//session_start();
if ( ! defined ('BASEPATH')) exit ('no direct script access allowed');

class C_admin extends CI_Controller {
	function __construct ()
	{
	parent::__construct ();
	$this->load->helper(array('url','html','form'));
	$this->load->library(array('tema','upload','form_validation','session'));
	$this->load->model ('m_admin');
	}
	function index(){
		if(isset($this->session->userdata['logged_in'])){
			$this->tema->show('admin/dasboard');
			}else{
				$this->load->view('admin/login');
			}
	}

	function login(){
			if(isset($this->session->userdata['logged_in'])){
				$this->tema->show('admin/dasboard');
				}else{
					$this->tema->tampilan('admin/login');
				}
		}
		function prosess_login(){
			if(isset($_POST['login'])){
				$data = array(
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password'))
				);
				$result = $this->m_admin->prosess_login($data);
					if ($result == TRUE) {
						$username = $this->input->post('username');
						$result = $this->m_admin->read_user_information($username);
					if ($result != false) {
						$session_data = array(
							'username' => $result[0]->username,
							'nama' => $result[0]->nama,
							'foto' => $result[0]->foto,
						);
							$this->session->set_userdata('logged_in', $session_data);
							$data['admin'] = $this->m_admin->data_user();
							$this->tema->show('admin/dasboard', $data);
						}
						} else {
							echo "<script> alert('Username atau Password Anda Salah !!')</script>";
							$this->tema->tampilan('admin/login');
				}
			}else{
				$data["pesan"] = "Anda tidak berhak login";
				redirect(site_url('c_admin'));
			}
		}
		function logout(){
		    $newdata = array(
		                'username'  =>'',
		                'nama' => FALSE,
		               );

		     $this->session->unset_userdata($newdata);
		     $this->session->sess_destroy();
		     redirect('c_admin/login','refresh');
		}
		function isi_berita(){
			$this->tema->show('admin/isi_berita');
		}


		function data_berita(){
			// if(isset($this->session->userdata['logged_in'])){
			// 		$username = ($this->session->userdata['logged_in']['username']);
					$data['berita']=$this->m_admin->selectberita();
					$this->tema->show('admin/data_berita', $data);
				// }else{
				// 	$this->load->view('admin/login');
				// }
		}

		function save_berita(){
			if(isset($this->session->userdata['logged_in'])){
				$username = ($this->session->userdata['logged_in']['username']);
				$judul_berita= $this->input->post('judul_berita');
				$status = $this->input->post('status');
				$isi_berita = $this->input->post('isi_berita');
			if(isset($_POST['simpan'])){
						$data = array(
							'judul_berita' => $judul_berita,
							'status' => $status,
							'isi_berita' => $isi_berita,
							'tanggal_create' => date('Y-m-d H:i:s')
							);
										$this->m_admin->insert_berita($data);
				$data['berita']=$this->m_admin->selectberita();
				echo "<script> alert('Berita sudah terbuat!!')</script>";
				$this->tema->show('admin/data_berita',$data);
			}else{
				$data['berita']=$this->m_admin->selectberita();
				$this->tema->show('admin/data_berita',$data);
			}
			}else{
				$this->load->view('admin/login');
			}
		}

		function editberita(){
		   if(isset($this->session->userdata['logged_in'])){
			   $id_berita = $this->uri->segment(3);
			   $data['edit_berita'] = $this->m_admin->editt_berita($id_berita);
			   $this->tema->show('admin/update_berita', $data);
		   }else{
			   $this->load->view('admin/login');
		   }
	   }
	   function updateberita(){
		   	   $id_berita = $this->input->post('id_berita');
               $judul_berita = $this->input->post('judul_berita');
               $status = $this->input->post('status');
               $isi_berita = $this->input->post('isi_berita');
              	$data= array(
					'id_berita' => $id_berita,
              		'judul_berita' => $judul_berita,
					'status' => $status,
              		'isi_berita' => $isi_berita
              	);

              $this->m_admin->update_berita($id_berita,$data);
              echo "<script> alert('Data Berhasil Diupdate')</script>";
              redirect('c_admin/data_berita');
       }
	   function hapusberita($id_berita){
   			$where = array('id_berita' => $id_berita);
   			$this->m_admin->hapus_berita($where,'tb_berita');
   			echo "<script> alert ('Apakah Anda Yakin Ingin Menghapus Berita Ini?') </script>";
   			
   	}


	function daftar_anggota(){
		//if(isset($this->session->userdata['logged_in'])){
			$this->tema->show('admin/daftar_anggota');
		//	}else{
				//$this->load->view('admin/login');
		//	}
	}

	function save_siswa(){
		$config=array(
    		'upload_path' => './asset/foto/', //lokasi gambar akan di simpan
    		'allowed_types' => 'jpg|jpeg|png|gif', //ekstensi gambar yang boleh di uanggah
    		'max_size' => '2000', //batas maksimal ukuran gambar
    		'max_width' => '2000', //batas maksimal lebar gambar
    		'max_height' => '2000', //batas maksimal tinggi gambar
    		'file_name' => url_title($this->input->post('foto')) //nama gambar
   		);
   		$this->load->library('upload', $config);
   		$this->upload->initialize($config);
   		$img = 'foto';
   			if ( ! $this->upload->do_upload($img)){
    			$error = $this->upload->display_errors();
    			echo $error;
   			} else {
   			$file = $this->upload->file_name;
  			$nis = $this->m_admin->add_nis();
			$nama = $this->input->post('nama');
			$asal = $this->input->post('asal_sekolah');
			$pass = md5("123456qwerty");
			$hak = "2";

		    $data=array(
		     'nis' => $nis,
		     'nama' => $nama,
		     'asal_sekolah' => $asal,
		     'foto' => $file,
		     'password' => $pass,
		     'hak_akses' => $hak
		    );
    		$id = $this->m_admin->add_siswa($data);
    		$data['siswa']= $this->m_admin->data_anggota();
    		$this->tema->show('admin/data_anggota', $data);
   		}
	}

	function data_anggota(){
		//if(isset($this->session->userdata['logged_in'])){
			$data['siswa']= $this->m_admin->data_anggota();
	    	$this->tema->show('admin/data_anggota', $data);
		//	}else{
				//$this->load->view('admin/login');
		//	}
	}

	function sudah_absen(){
		//if(isset($this->session->userdata['logged_in'])){
			$data['siswa_absen'] = $this->m_admin->sudah_absen();
			$this->tema->show('admin/sudah_absen', $data);

		//	}else{
				//$this->load->view('admin/login');
		//	}
	}

	function belum_absen(){
		//if(isset($this->session->userdata['logged_in'])){
			$data['belum_absen'] = $this->m_admin->belum_absen();
			$this->tema->show('admin/belum_absen', $data);
		//	}else{
				//$this->load->view('admin/login');
		//	}
	}

	function absen_status(){
		//if(isset($this->session->userdata['logged_in'])){
			$data['siswa']= $this->m_admin->absen_status();
	    	$this->tema->show('admin/absen_status', $data);
		//	}else{
				//$this->load->view('admin/login');
		//	}
	}
	function cek_absen(){
		$nis = $this->uri->segment(3);
		$data['detail_absen'] = $this->m_admin->cek_absen($nis);
		$data['identitas'] = $this->m_admin->identitas($nis);
		$this->tema->show('admin/cek_absen', $data);
	}
	function detail_absen(){
		$nis = $this->uri->segment(3);
		$data['detail_absen'] = $this->m_admin->detail_absen($nis);
		$data['identitas'] = $this->m_admin->identitas($nis);
		$this->tema->show('admin/detail_absen', $data);
	}
	function edit_absen(){
   if(isset($this->session->userdata['logged_in'])){
	   $id_detail = $this->uri->segment(3);
	   $data['absen'] = $this->m_admin->edit_absen($id_detail);
	//    var_dump($data['edit_absen']);
	//    exit();
	   $this->tema->show('admin/perbaiki_absen', $data);
   }else{
	   $this->load->view('admin/login');
   }
}
	function update_absen(){
	if(isset($this->session->userdata['logged_in'])){
		$id_absen = $this->input->post('id_absen');
		$jenis_kegiatan = $this->input->post('jenis_kegiatan');
		$keterangan = $this->input->post('keterangan');
		$data = array(
			'jenis_kegiatan' => $jenis_kegiatan,
			'keterangan' => $keterangan
		);

	  $this->m_admin->updateabsen($id_absen,$data);
	  echo "<script> alert ('Data berhasil di Update!') </script>";
	  $data['siswa']= $this->m_admin->absen_status();
	  $this->tema->show('admin/absen_status', $data);
  }else{
	$this->load->view('admin/login');
}
}

	function save_nilai(){
		if(isset($_POST["valide"])){
				$id_absen = $this->input->post('id_absen');
					$data = array(
						'sts_keterangan' => '1',
						'tgl_koreksi' => date('Y-m-d H:i:s')
						);
					$id = $this->m_admin->update_absen($data, $id_absen);
					echo "<script> alert('Status Sudah Valide')</script>";
					$data['siswa']= $this->m_admin->absen_status();
	    	$this->tema->show('admin/absen_status', $data);
			}elseif (isset($_POST["invalide"])){
				$id_absen = $this->input->post('id_absen');
				$data = array(
						'sts_keterangan' => '2',
						'tgl_koreksi' => date('Y-m-d H:i:s')
						);
				$id = $this->m_admin->update_absen($data, $id_absen);
				echo "<script> alert('Status  Invalide')</script>";
				$data['siswa']= $this->m_admin->absen_status();
	    		$this->tema->show('admin/absen_status', $data);
			}
	}

	function pesan(){
		//if(isset($this->session->userdata['logged_in'])){
			$data['pesan'] = $this->m_admin->pesan();
			$this->tema->show('admin/pesan', $data);
		//	}else{
				//$this->load->view('admin/login');
		//	}
	}

	function baca_pesan(){
		//if(isset($this->session->userdata['logged_in'])){
			$id_pesan = $this->uri->segment(3);
			$data = array('status_pesan' => 2 );

			$data['baca_pesan'] = $this->m_admin->baca_pesan($id_pesan, $data);
			$data['lihat_pesan'] = $this->m_admin->lihat_pesan($id_pesan);

			$this->tema->show('admin/baca_pesan', $data);
		//	}else{
				//$this->load->view('admin/login');
		//	}
	}
	function baca_pesan1(){
		//if(isset($this->session->userdata['logged_in'])){
			$id_pesan = $this->uri->segment(3);
			$data['lihat_pesan'] = $this->m_admin->lihat_pesan($id_pesan);

			$this->tema->show('admin/baca_pesan', $data);
		//	}else{
				//$this->load->view('admin/login');
		//	}
	}

	function hapuspesan($id_pesan){
   			$where = array('pesan_id' => $id_pesan);
   			$this->m_admin->hapus_pesan($where,'tb_pesan');
   			echo "<script> alert ('Apakah Anda Yakin Ingin Menghapus Berita Ini?') </script>";
   			redirect('c_admin/pesan');
   	}

	function daftar_user(){
		//if(isset($this->session->userdata['logged_in'])){
			$this->tema->show('admin/daftar_user');
		//	}else{
				//$this->load->view('admin/login');
		//	}
	}

	function save_user(){
		$config=array(
    		'upload_path' => './asset/foto_user/', //lokasi gambar akan di simpan
    		'allowed_types' => 'jpg|jpeg|png|gif', //ekstensi gambar yang boleh di uanggah
    		'max_size' => '2000', //batas maksimal ukuran gambar
    		'max_width' => '2000', //batas maksimal lebar gambar
    		'max_height' => '2000', //batas maksimal tinggi gambar
    		'file_name' => url_title($this->input->post('foto')) //nama gambar
   		);
   		$this->load->library('upload', $config);
   		$this->upload->initialize($config);
   		$img = 'foto';
   			if ( ! $this->upload->do_upload($img)){
    			$error = $this->upload->display_errors();
    			echo $error;
   			} else {
   			$file = $this->upload->file_name;
  			$username = $this->input->post('username');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$pass = md5("123456qwerty");
			$hak = "1";

		    $data=array(
		     'username' => $username,
		     'nama' => $nama,
		     'alamat' => $alamat,
		     'foto' => $file,
		     'password' => $pass,
		     'hak_akses' => $hak
		    );
    		$id = $this->m_admin->add_user($data);
    		$data['user']= $this->m_admin->data_user();
    		$this->tema->show('admin/data_user', $data);
   		}
   	}

	function data_user(){
		//if(isset($this->session->userdata['logged_in'])){
			$data['user']= $this->m_admin->data_user();
	    	$this->tema->show('admin/data_user', $data);
		//	}else{
				//$this->load->view('admin/login');
		//	}
	}

	//


}
