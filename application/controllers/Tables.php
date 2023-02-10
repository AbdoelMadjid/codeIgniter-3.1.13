<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tables extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function table_normal(){
		$this->load->view('table-normal');
	}
	public function table_datatables(){
		$this->load->view('table-datatables');
	}
	public function table_jqgrid(){
		$this->load->view('table-jqgrid');
	}
}
