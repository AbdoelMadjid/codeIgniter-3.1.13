<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Smartint extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function smartint_layouts(){
		$this->load->view('smartint-layouts');
	}
	public function smartint_skins(){
		$this->load->view('smartint-skins');
	}	
	public function smartint_applayout(){
		$this->load->view('smartint-applayout');
	}
	public function smartint_difver(){
		$this->load->view('smartint-difver');
	}			
}
