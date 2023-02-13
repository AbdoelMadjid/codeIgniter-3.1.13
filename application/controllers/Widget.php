<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Widget extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function widgets(){
		$data['IconMain']   = "list-alt";
        $data['page_title_main'] = "Widgets";
		$this->load->view('widgets',$data);
	}
}
