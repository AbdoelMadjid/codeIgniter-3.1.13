<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Widget extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function widgets(){
		$this->load->view('widgets');
	}
}