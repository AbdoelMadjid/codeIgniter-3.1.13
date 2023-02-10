<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
  
	public function dashboard_analytics(){
		$this->load->view('dashboard-analytics');
	}
	public function dashboard_marketing(){
		$this->load->view('dashboard-marketing');
	}	
	public function dashboard_social(){
		$this->load->view('dashboard-social');
	}		
}
