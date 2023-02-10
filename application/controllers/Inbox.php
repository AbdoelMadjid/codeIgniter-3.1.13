<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function inbox(){
		$this->load->view('inbox');
	}
}
