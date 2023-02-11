<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cool extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
  
	public function cool_calendar(){
		$data['IconMain']   = "calendar";
        $data['page_title_main'] = "Cool Features!";
		$this->load->view('cool-calendar', $data);
	}
	public function cool_gmap_xml(){
		$data['IconMain']   = "map-marker";
        $data['page_title_main'] = "Cool Features!";
		$this->load->view('cool-gmap-xml', $data);
	}	
}
