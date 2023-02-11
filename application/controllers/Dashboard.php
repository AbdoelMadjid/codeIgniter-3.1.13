<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
  
	public function dashboard_analytics(){
		$data['IconMain']   = "home";
        $data['page_title_main'] = "Dashboard";
		$this->load->view('dashboard-analytics',$data);
	}
	public function dashboard_marketing(){
		$data['IconMain']   = "home";
        $data['page_title_main'] = "Dashboard";
		$this->load->view('dashboard-marketing',$data);
	}	
	public function dashboard_social(){
		$data['IconMain']   = "home";
        $data['page_title_main'] = "Dashboard";
		$this->load->view('dashboard-social');
	}		
}
