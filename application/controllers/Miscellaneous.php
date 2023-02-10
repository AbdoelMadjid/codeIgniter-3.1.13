<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Miscellaneous extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
  
	public function misc_pricing_table(){
		$this->load->view('misc-pricing-table');
	}
	public function misc_invoice(){
		$this->load->view('misc-invoice');
	}
	public function misc_login(){
		$this->load->view('misc-login');
	}
	public function misc_register(){
		$this->load->view('misc-register');
	}
	public function misc_forgotpassword(){
		$this->load->view('misc-forgotpassword');
	}
	public function misc_lock(){
		$this->load->view('misc-lock');
	}
	public function misc_email_template(){
		$this->load->view('misc-email-template');
	}
	public function misc_error404(){
		$this->load->view('misc-error404');
	}	
	public function misc_error500(){
		$this->load->view('misc-error500');
	}	
	public function misc_blank_(){
		$this->load->view('misc-blank_');
	}
	public function misc_chat(){
		$this->load->view('misc-chat');
	}					
}
