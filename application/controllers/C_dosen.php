<?php 
//session_start();
if ( ! defined ('BASEPATH')) exit ('no direct script access allowed');

class C_dosen extends CI_Controller {
	function __construct ()
	{
	parent::__construct ();
	$this->load->helper(array('url','html','form'));
	$this->load->library(array('tema','upload','form_validation','session'));
	$this->load->model ('m_dosen');
	}
	
	function index(){	
		if(isset($this->session->userdata['logged_in'])){

			$data['data_berita'] = $this->m_dosen->data_berita();
			$this->tema->display('dashboard', $data);
			}else{
				$this->tema->tampilan('login/home');
			}
	}

	function login(){	
		if(isset($this->session->userdata['logged_in'])){
			$this->tema->display('dashboard');
			}else{
				$this->tema->tampilan('login/login');
			}
	}

	function prosess_login(){
		if(isset($_POST['login'])){	
			$data = array(
				'nis' => $this->input->post('nis'),
				'password' => md5($this->input->post('password'))
			);
			$result = $this->m_dosen->prosess_login($data);
				if ($result == TRUE) {
					$nis = $this->input->post('nis');
					$result = $this->m_dosen->read_user_information($nis);
				if ($result != false) {
					$session_data = array(
						'nis' => $result[0]->nis,
						'nama' => $result[0]->nama,
						'foto' => $result[0]->foto,
					);
						$this->session->set_userdata('logged_in', $session_data);

						$data['data_berita'] = $this->m_dosen->data_berita();
						$data['siswa'] = $this->m_dosen->selectdosen();
						$data['cari_absen'] = $this->m_dosen->cari_absen($nis);
						$data['detail']=$this->m_dosen->selectdetail($nis);
						$this->tema->display('dashboard', $data);
					}
					} else {
						echo "<script> alert('Nis atau Password Anda Salah !!')</script>";
						$this->tema->tampilan('login/login');
			}
		}else{
			$data["pesan"] = "Anda tidak berhak login"; 
			redirect(site_url('c_dosen'));
		}
	}

	function logout(){
	    $newdata = array(
	                'nis'  =>'',
	                'nama' => FALSE,
	               );

	     $this->session->unset_userdata($newdata);
	     $this->session->sess_destroy();
	     redirect('c_dosen/login','refresh');
	}

/*-----------Absen Magang------------*/
	function profile(){
		if(isset($this->session->userdata['logged_in'])){
			$nis = ($this->session->userdata['logged_in']['nis']);
			$data['profile']=$this->m_dosen->selectprofile($nis);
			$this->tema->display('profile',$data);
			}else{
				$this->tema->tampilan('login/home');
			}
	}

	function absen(){
		if(isset($this->session->userdata['logged_in'])){
		$nis = ($this->session->userdata['logged_in']['nis']);
		$data['siswa'] = $this->m_dosen->selectdosen();
		$data['cari_absen'] = $this->m_dosen->cari_absen($nis);
		$data['detail']=$this->m_dosen->selectdetail($nis);	
		$this->tema->display('form_chek', $data);
		}else{
			echo "<script> alert('Anda Harus login dulu !')</script>";
		$this->tema->tampilan('login/login');
		}
	}

	function cek_absen(){
			if(isset($this->session->userdata['logged_in'])){
			$nis = $this->input->post('nis');	
		if(isset($_POST["in"])){
					$data = array(
						'nis' => $nis,
						'tanggal' => date('Y-m-d')
						);
					$id = $this->m_dosen->cek_absen($data);
					$data = array(
						'id_absen' => $id,
						'status' => '1',
						'waktu_in' => date ('Y-m-d H:i:s')
						);
					$this->m_dosen->cek_detail($data);
				echo "<script> alert('Anda Berhasil Masuk')</script>";
			}elseif (isset($_POST["out"])){
				$id = $this->input->post('id_absen');
				$jenis = $this->input->post('jenis_kegiatan');
				$cek = $this->m_dosen->cek_hadir($id);
				if($cek){
					$data = array(
						'status' => '2',
						'jenis_kegiatan' => $jenis,
						'waktu_out' => date ('Y-m-d H:i:s')
						);
					$this->m_dosen->updatedetail($data,$id);
					echo "<script> alert('Anda Berhasil Keluar')</script>";
				}else{
					echo "<script> alert('Anda Sudah Keluar tidak bisa Chek In/Out')</script>";
				}
			}
				$this->absen();
			}else{
				$this->load->view('login/index');
			}
	}

	function detaildata_absen(){
		if(isset($this->session->userdata['logged_in'])){
			$nis = ($this->session->userdata['logged_in']['nis']);
			$data['pesan'] = 'Detail Absen 7 Hari';
			$data['detail']=$this->m_dosen->selectabsen($nis);
			$this->tema->display('form_dosen',$data);
		}else{
			$this->load->view('login/index');
		}
	}

	/*-------Pesan Absen Magang---------*/
	function pesan(){
		if(isset($this->session->userdata['logged_in'])){
			$nis = ($this->session->userdata['logged_in']['nis']);
			$data['pesan']=$this->m_dosen->selectpesan($nis);
			$this->tema->display('isidata',$data);
		}else{
			$this->load->view('login/index');
		}
	}

	function kirim_pesan(){
		if(isset($this->session->userdata['logged_in'])){
			$nis = ($this->session->userdata['logged_in']['nis']);
			$judul = $this->input->post('judul_pesan');
			$isi = $this->input->post('isi_pesan');	
		if(isset($_POST["kirim"])){
					$data = array(
						'nis' => $nis,
						'judul_pesan' => $judul,
						'isi_pesan' => $isi,
						'tanggal' => date('Y-m-d H:i:s'),
						'status_pesan' => '1'
						);
			$this->m_dosen->kirim_pesan($data);
			$data['pesan']=$this->m_dosen->selectpesan($nis);
			echo "<script> alert('Pesan Anda Sudah terkirim !!')</script>";
			$this->tema->display('isidata',$data);
		}else{
			$data['pesan']=$this->m_dosen->selectpesan($nis);
			echo "<script> alert('Anda tidak dapat mengirim Pesan !!')</script>";
			$this->tema->display('isidata',$data);
		}
		}else{
			$this->load->view('login/index');
		}
	}

	/*-------Pesan Absen Magang---------*/
	function ganti_password(){
		if(isset($this->session->userdata['logged_in'])){
			$nis = ($this->session->userdata['logged_in']['nis']);
			$data['pesan']=$this->m_dosen->selectabsen($nis);
			$this->tema->display('change_password',$data);
		}else{
			$this->load->view('login/index');
		}
	}

	function prosess_gantipassword(){
		if(isset($this->session->userdata['logged_in'])){
			$nis = ($this->session->userdata['logged_in']['nis']);
            if (isset($_POST['ganti'])) {

                if ($_POST['password_lama'] == "" | $_POST['password_baru'] == "" | $_POST['ulangi_password'] == "" | ($_POST['password_baru'] != $_POST['ulangi_password'] )) {
                    echo "<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Semua kolom wajib diisi! Password baru harus sama dengan Ulangi Password!')
						window.location.href='" . base_url() . "index.php/c_dosen/ganti_password';
						</SCRIPT>";
                } else {

                    $password_lama = $_POST['password_lama'] ; //. $this->config->item("key_login");
                    $password_baru = $_POST['password_baru'] ; //. $this->config->item("key_login");
                    $temp = $this->m_dosen->Getsiswa("where nis = '$nis' and password = md5('$password_lama')")->result_array();
                    if ($temp != NULL) {
                        $result = $this->m_dosen->ganti_password($nis, $password_baru);
                        if ($result == 1) {
                            echo "<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Data Berhasil Di Update !!')
                                                    window.location.href='" . base_url() . "index.php/c_dosen/ganti_password';
                                                    </SCRIPT>";
                        } else
                            echo "<SCRIPT LANGUAGE='JavaScript'>
                                                    window.alert('Data gagal Di Update !!')
                                                    window.location.href='" . base_url() . "index.php/c_dosen/ganti_password';
                                                    </SCRIPT>";
                    } else {
                        echo "<SCRIPT LANGUAGE='JavaScript'>
                                            window.alert('Data Tidak Di Update !! Password lama salah')
                                            window.location.href='" . base_url() . "index.php/c_dosen/ganti_password';
                                            </SCRIPT>";
                    }
                }
            }
        } else {
            echo "<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Anda Harus Login Dulu !!')
				window.location.href='" . base_url() . "index.php/website';
				</SCRIPT>";
        }
	}

	/*-------Pendaftaran Absen Magang---------*/
	function add_dosen(){
			$this->tema->display('adddosen');
		}
	function save_dosen(){
		// $path = './asset/foto/';
  // 		chmod($path,0777);
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
  			$nis = $this->m_dosen->add_nis();
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
    		$id = $this->m_dosen->add_dosen($data);
    		$data['data_absen'] = $this->m_dosen->cari_dosen($id);
    		$this->tema->display('tampildosen', $data);
   		}
  	}


	 function updatedosen(){
	 	if(isset($this->session->userdata['logged_in'])){
            $id = $this->uri->segment(3);
            //$data['students'] = $this->update_model->show_students();
			$data['updatedosen'] = $this->m_dosen->updatedosen($id);
            $this->tema->display('updatedosen', $data);
        }else{
			$this->load->view('login/index');
		}
    }
         
    function update(){
            $id = $this->input->post('id_siswa');
            $nis = $this->input->post('nis');
            $nama = $this->input->post('nama');
            $asal= $this->input->post('asal_sekolah');
           	$data= array(
           		'nama' => $nama,
           		'asal_sekolah' => $asal
           	);

           $this->m_dosen->update($id,$data);
           echo "<script> alert('Data Berhasil Diupdate')</script>";
           redirect('c_dosen/tampildosen');
    }

	function hapus($nis){
			$where = array('nis' => $nis);
			$this->m_dosen->hapus_data($where,'tb_siswa');
			echo "<script> alert ('Apakah Anda Yakin Ingin Menghapus Data') </script>";
			//redirect('c_dosen/tampildosen');
	}

    function tampildosen(){
    	if(isset($this->session->userdata['logged_in'])){
	    	$data['siswa']= $this->m_dosen->tampildosen();
	    	$this->tema->display('tampildosen', $data);
	    }else{
			$this->load->view('login/index');
		}
	}
	/*-------Akhir CRUD---------*/

}