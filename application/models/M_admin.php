<?php if ( ! defined ('BASEPATH'))
	exit ('No direct script access allowed');

	class M_admin extends CI_Model {

	var $table = 'tb_siswa';
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function insert_berita($data){
		$this->db->insert('tb_berita',$data);
		$id = $this->db->insert_id();
	return $id;
	}
	function selectberita(){
		$this->db->select('*');
		$this->db->from('tb_berita');
		$this->db->order_by('UNIX_TIMESTAMP(tanggal_create)');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	function editt_berita($id_berita){
		$this->db->select('*');
		$this->db->from('tb_berita');
		$this->db->where('id_berita', $id_berita);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	function update_berita($id_berita,$data){
		$this->db->where('id_berita', $id_berita);
		$this->db->update('tb_berita', $data);
	}
	function hapus_berita($where,$id_berita){
		$this->db->where($where);
		$this->db->delete($id_berita);
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
			$tahun = Date('Y', 'm');
			$kodejadi = "SIS".$tahun.$kodemax;
			return $kodejadi;

        }

    function add_siswa($data)
        {
            $this->db->insert('tb_siswa',$data);
            $id = $this->db->insert_id();
			return $id;
        }

    function cari_siswa ($id){
         $query = $this->db->query("SELECT * FROM tb_siswa WHERE id_siswa='$id'");
        	return $query->result();
        }

    function data_anggota(){
    	 $query = $this->db->query("SELECT * FROM tb_siswa ORDER BY nama asc");
        	return $query->result();
    }

    function isi_berita($data){
    	$this->db->insert('tb_berita', $data);
    }

    function absen_status(){
    	 $query = $this->db->query("SELECT * FROM tb_siswa ORDER BY nama asc");
        return $query->result();
    }

    function sudah_absen(){
    	$this->db->select('tb_siswa.nis, tb_siswa.nama, tb_siswa.asal_sekolah, tb_absen.id_absen, tb_absen.tanggal, tb_detail.status, tb_detail.waktu_in')
		->from ('tb_siswa')
		->join ('tb_absen', 'tb_siswa.nis = tb_absen.nis')
		->join ('tb_detail', 'tb_absen.id_absen = tb_detail.id_absen')
		->where ('tb_detail.status !=0')
		->where ('tb_absen.tanggal', date ('Y-m-d'))
		->order_by('tb_detail.waktu_in','asc');
		$query = $this->db->get();
		return $query->result();
    }

    function belum_absen(){
    	// $this->db->select('*')
    	// ->from('tb_siswa')
    	// ->where('NOT EXISTS')
    	// ->select
    	$query = $this->db->query('SELECT * FROM tb_siswa WHERE NOT EXISTS (SELECT * FROM tb_absen WHERE tb_siswa.nis=tb_absen.nis AND tb_absen.tanggal= Date (NOW()))');
    	return $query->result();
    }
    function identitas($nis){
    	$this->db->select('*')
    	->from('tb_siswa')
    	->where('nis', $nis)
    	->limit('1')
    	->order_by('nama','asc');
    	$query = $this->db->get();
    	return $query->result();
    }

    function cek_absen($nis){
    	$this->db->select('*')
    	->from('tb_siswa')
    	->join('tb_absen', 'tb_siswa.nis=tb_absen.nis')
    	->join('tb_detail', 'tb_absen.id_absen=tb_detail.id_absen')
    	->where('tb_siswa.nis', $nis)
    	
    	->order_by('tb_absen.tanggal','DESC');
    	$query = $this->db->get();
    	return $query->result();
    }
    function detail_absen($nis){
    	$this->db->select('*')
    	->from('tb_siswa')
    	->join('tb_absen', 'tb_siswa.nis=tb_absen.nis')
    	->join('tb_detail', 'tb_absen.id_absen=tb_detail.id_absen')
    	->where('tb_siswa.nis', $nis)
    	->order_by('tb_absen.tanggal','desc');
    	$query = $this->db->get();
    	return $query->result();
    }
	function edit_absen($id_detail){
		$this->db->select('*')
    	->from('tb_detail')
    	->join('tb_absen', 'tb_detail.id_absen=tb_absen.id_absen')
    	->join('tb_siswa', 'tb_absen.nis=tb_siswa.nis')
    	->where('tb_detail.id_detail', $id_detail);
    	$query = $this->db->get();
		$result = $query;
		return $result;
	}
	function updateabsen($id_absen,$data){
        $this->db->where('id_absen', $id_absen);
        $this->db->update('tb_detail', $data);
	}

    function add_user($data)
        {
            $this->db->insert('tb_user',$data);
            $id = $this->db->insert_id();
			return $id;
        }
    function data_user(){
    	 $query = $this->db->query("SELECT * FROM tb_user ORDER BY nama asc");
        	return $query->result();
    }

    function pesan(){
    	$this->db->select('*')
    	->from('tb_pesan')
    	->join('tb_siswa', 'tb_siswa.nis=tb_pesan.nis')
    	->order_by('tb_pesan.tanggal','desc');
    	$query = $this->db->get();
    	return $query->result();
    }
    function baca_pesan($id_pesan, $data){
    	$this->db->where('pesan_id', $id_pesan);
		$this->db->update('tb_pesan', $data);
    }

    function hapus_pesan($where,$id_berita){
		$this->db->where($where);
		$this->db->delete($id_berita);
	}


    function lihat_pesan($id_pesan){
    	$this->db->select('*')
    	->from('tb_pesan')
    	->join('tb_siswa', 'tb_siswa.nis=tb_pesan.nis')
    	->where('pesan_id', $id_pesan)
    	->order_by('tb_pesan.tanggal','desc');
    	$query = $this->db->get();
    	return $query->result();
    }

    function update_absen($data, $id_absen){
    	$this->db->where ('id_absen', $id_absen);
		$this->db->update('tb_detail', $data);
	}

	function cek_detail($data){
		$this->db->insert('tb_detail',$data);
	}

	function updatedetail($data,$id){
		$this->db->where ('id_absen', $id);
		$this->db->update('tb_detail', $data);
	}
	function prosess_login($data)
 	{

		$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

	function read_user_information($username) {
		$condition = "username =" . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}
}
