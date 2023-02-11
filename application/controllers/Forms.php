<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Forms extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function form_elements(){
		$data['IconMain']   = "edit";
        $data['page_title_main'] = "Form";
		$this->load->view('form-elements',$data);
	}
	public function form_layout(){
		$data['IconMain']   = "edit";
        $data['page_title_main'] = "Form";		
		$this->load->view('form-layout',$data);
	}
	public function form_validation(){
		$data['IconMain']   = "edit";
        $data['page_title_main'] = "Form";		
		$this->load->view('form-validation',$data);
	}
	public function form_bootstrap_forms(){
		$data['IconMain']   = "edit";
        $data['page_title_main'] = "Form";		
		$this->load->view('form-bootstrap-forms',$data);
	}
	public function form_plugins(){
		$data['IconMain']   = "edit";
        $data['page_title_main'] = "Form";		
		$this->load->view('form-plugins',$data);
	}
	public function form_wizard(){
		$data['IconMain']   = "edit";
        $data['page_title_main'] = "Form";		
		$this->load->view('form-wizard',$data);
	}
	public function form_other_editors(){
		$data['IconMain']   = "edit";
        $data['page_title_main'] = "Form";		
		$this->load->view('form-other-editors',$data);
	}
	public function form_dropzone(){
		$data['IconMain']   = "edit";
        $data['page_title_main'] = "Form";		
		$this->load->view('form-dropzone',$data);
	}	
	public function form_image_editor(){
		$data['IconMain']   = "edit";
        $data['page_title_main'] = "Form";		
		$this->load->view('form-image-editor',$data);
	}	
	public function form_ckeditor(){
		$data['IconMain']   = "edit";
        $data['page_title_main'] = "Form";		
		$this->load->view('form-ckeditor',$data);
	}							
}
