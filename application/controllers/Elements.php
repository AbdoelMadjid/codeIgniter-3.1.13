<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Elements extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function ui_general_elements(){
		$this->load->view('ui-general-elements');
	}
	public function ui_buttons(){
		$this->load->view('ui-buttons');
	}
	public function ui_icon_fa(){
		$this->load->view('ui-icon-fa');
	}
	public function ui_icon_glyph(){
		$this->load->view('ui-icon-glyph');
	}
	public function ui_icon_flags(){
		$this->load->view('ui-icon-flags');
	}	
	public function ui_grid(){
		$this->load->view('ui-grid');
	}
	public function ui_treeview(){
		$this->load->view('ui-treeview');
	}
	public function ui_nestable_list(){
		$this->load->view('ui-nestable-list');
	}
	public function ui_jqui(){
		$this->load->view('ui-jqui');
	}	
	public function ui_typography(){
		$this->load->view('ui-typography');
	}						
}
