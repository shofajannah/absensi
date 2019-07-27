<?php if ( ! defined ('BASEPATH'))
	exit ('No direct script access allowed');

	class M_dosen extends CI_Model {

	var $table = 'tb_siswa';
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function selectdosen(){
		$query = $this->db->query("SELECT * FROM tb_siswa ORDER BY nama asc");
        return $query->result();
	}

	function selectprofile($nis){
		$this->db->select('*');
		$this->db->from('tb_siswa');
		$this->db->where('nis', $nis);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	function cari($nis){
		$query=$this->db->query("SELECT * FROM tb_siswa WHERE nis='$nis' ");
		return $query->result();
	}

	function cek_hadir($id){
		$query=$this->db->query("SELECT * FROM tb_detail WHERE id_absen='$id' AND status='1' ");
		return $query->result();
	}

	function cari_absen($nis){
		$this->db->select('tb_siswa.nis, tb_absen.id_absen, tb_absen.tanggal, tb_detail.status')
		->from ('tb_siswa')
		->where ('tb_siswa.nis', $nis)
		->join ('tb_absen', 'tb_siswa.nis = tb_absen.nis')
		->join ('tb_detail', 'tb_absen.id_absen = tb_detail.id_absen')
		->where ('tb_absen.tanggal', date ('Y-m-d'));
		$query = $this->db->get();
		return $query->result();
	}

	function cek_absen($data){
		$this->db->insert('tb_absen', $data);
		$id = $this->db->insert_id();
		return $id;
	}

	function cek_detail($data){
		$this->db->insert('tb_detail',$data);
	}

	function updatedetail($data,$id){
		$this->db->where ('id_absen', $id);
		$this->db->update('tb_detail', $data);
	}

	function selectdetail($nis){
		$this->db->select('tb_siswa.nis, tb_siswa.nama, tb_absen.id_absen, tb_detail.status, tb_detail.jenis_kegiatan , tb_detail.waktu_in, 
			tb_detail.waktu_out')
		->from('tb_siswa')
		->where ('tb_siswa.nis',$nis)
		->join ('tb_absen', 'tb_siswa.nis = tb_absen.nis')
		->join ('tb_detail', 'tb_absen.id_absen = tb_detail.id_absen')
		->order_by ("tb_absen.id_absen", "desc")
		->where ('tb_absen.tanggal', date('Y-m-d'));
		$query = $this->db->get();
		return $query->result();
	}

	function selectabsen($nis){
		$this->db->select('tb_siswa.nis, tb_siswa.nama, tb_absen.id_absen, tb_detail.status, tb_detail.jenis_kegiatan , tb_detail.waktu_in, 
			tb_detail.waktu_out')
		->from('tb_siswa')
		->where ('tb_siswa.nis',$nis)
		->join ('tb_absen', 'tb_siswa.nis = tb_absen.nis')
		->join ('tb_detail', 'tb_absen.id_absen = tb_detail.id_absen')
		->order_by ("tb_absen.id_absen", "desc")
		->limit(7);
		$query = $this->db->get();
		return $query->result();
	}

	/*--------Pesan----------*/
	function kirim_pesan($data){
            $this->db->insert('tb_pesan',$data);
            $id = $this->db->insert_id();
			return $id;
        }
	function selectpesan($nis){
		$this->db->select('*');
		$this->db->from('tb_pesan');
		$this->db->where('nis', $nis);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}


	function Getsiswa($where = '') {
        return $this->db->query("select * from tb_siswa $where;");
    }
    function ganti_password($nis, $password_baru) { //check by hatma @ 17 okt
        $this->db->where(array('nis' => $nis));
        return $this->db->update('tb_siswa', array('password' => md5($password_baru)));
    }
	/*--------CRUD----------*/
         
        function tampildosen()
        {
            $query = $this->db->query("SELECT * FROM tb_siswa ORDER BY nama asc");
        	return $query->result();
        }
         
        function add_dosen($data)
        {
            $this->db->insert('tb_siswa',$data);
            $id = $this->db->insert_id();
			return $id;
        }

        function cari_dosen ($id){
         $query = $this->db->query("SELECT * FROM tb_siswa WHERE id_siswa='$id'");
        	return $query->result();
        }
        function add_nis(){
        	$this->db->select('RIGHT(tb_siswa.nis,4) as kode', FALSE);
			$this->db->order_by('nis','DESC');
			$this->db->limit(1);
			$query = $this->db->get('tb_siswa');
			if($query->num_rows() <> 0){
			$data = $query->row();
			$kode = intval($data->kode) + 1;
			}else{
			$kode = 1;
			}
			$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
			$tahun = Date('Y');
			$kodejadi = "SIS".$tahun.$kodemax;
			return $kodejadi;

        }
     	function updatedosen($id){
         	$this->db->select('*');
			$this->db->from('tb_siswa');
			$this->db->where('id_siswa', $id);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
         }

        function update($id,$data){
			$this->db->where('id_siswa', $id);
			$this->db->update('tb_siswa', $data);
			return TRUE;
		} 
	 
        function hapus_data($where,$nis){
			$this->db->where($where);
			$this->db->delete($nis);
		}
	/*--------Akhir CRUD----------*/

		function prosess_login($data)
		 {
		   
			$condition = "nis =" . "'" . $data['nis'] . "' AND " . "password =" . "'" . $data['password'] . "'";
			$this->db->select('*');
			$this->db->from('tb_siswa');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
			return true;
			} else {
			return false;
			}
		}

		function read_user_information($nis) {
			$condition = "nis =" . "'" . $nis . "'";
			$this->db->select('*');
			$this->db->from('tb_siswa');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
			return $query->result();
			} else {
			return false;
			}
		}

		function data_berita(){
			$query = $this->db->query("SELECT * FROM tb_berita WHERE status= 'aktif' ");
       	 return $query->result();
			// $this->db->select('*');
			// $this->db->from('tb_berita');
			// $this->db->where('judul_berita');
			// $query = $this->db->get();
			// $result = $query->result();
			// return $result;
		}
		
	}