<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tables extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function table_normal(){
		$data['IconMain']   = "table";
        $data['page_title_main'] = "Tables";
		$this->load->view('table-normal',$data);
	}
	public function table_datatables(){
		$data['IconMain']   = "table";
        $data['page_title_main'] = "Tables";
		$this->load->view('table-datatables',$data);
	}
	public function table_jqgrid(){
		$data['IconMain']   = "table";
        $data['page_title_main'] = "Tables";
		$this->load->view('table-jqgrid',$data);
	}
}
