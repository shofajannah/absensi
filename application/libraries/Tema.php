<?php
class Tema {
	protected $_ci;

	function __construct() {
		$this->_ci =& get_instance();
	}

	function display($index,$data=null){
		$data ['_content'] =$this->_ci->load->view($index,$data, true);
		$data ['_navigation'] =$this->_ci->load->view('template/navigation',$data, true);

			$this->_ci->load->view('home.php', $data);
	}

	function show($index,$data=null){
		$data ['_content'] =$this->_ci->load->view($index,$data, true);
		$data ['_header'] =$this->_ci->load->view('admin/template/header',$data, true);
		$data ['_sidebar'] =$this->_ci->load->view('admin/template/sidebar',$data, true);

			$this->_ci->load->view('admin/index.php', $data);
	}	
	
	
	function tampilan($index,$data=null){
		$data ['_content'] =$this->_ci->load->view($index,$data, true);
			$this->_ci->load->view('login/index.php', $data);
	}

}
