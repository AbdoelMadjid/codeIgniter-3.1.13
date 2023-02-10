<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cool extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
  
	public function cool_calendar(){
		$this->load->view('cool-calendar');
	}
	public function cool_gmap_xml(){
		$this->load->view('cool-gmap-xml');
	}	
}
