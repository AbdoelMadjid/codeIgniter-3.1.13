<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Forms extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function form_elements(){
		$this->load->view('form-elements');
	}
	public function form_layout(){
		$this->load->view('form-layout');
	}
	public function form_validation(){
		$this->load->view('form-validation');
	}
	public function form_bootstrap_forms(){
		$this->load->view('form-bootstrap-forms');
	}
	public function form_plugins(){
		$this->load->view('form-plugins');
	}
	public function form_wizard(){
		$this->load->view('form-wizard');
	}
	public function form_other_editors(){
		$this->load->view('form-other-editors');
	}
	public function form_dropzone(){
		$this->load->view('form-dropzone');
	}	
	public function form_image_editor(){
		$this->load->view('form-image-editor');
	}	
	public function form_ckeditor(){
		$this->load->view('form-ckeditor');
	}							
}
