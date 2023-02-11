<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Elements extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function ui_general_elements(){
		$data['IconMain']   = "desktop";
        $data['page_title_main'] = "UI Elements";
		$this->load->view('ui-general-elements',$data);
	}
	public function ui_buttons(){
		$data['IconMain']   = "desktop";
        $data['page_title_main'] = "UI Elements";
		$this->load->view('ui-buttons',$data);
	}
	public function ui_icon_fa(){
		$data['IconMain']   = "desktop";
        $data['page_title_main'] = "UI Elements";
		$this->load->view('ui-icon-fa',$data);
	}
	public function ui_icon_glyph(){
		$data['IconMain']   = "desktop";
        $data['page_title_main'] = "UI Elements";
		$this->load->view('ui-icon-glyph',$data);
	}
	public function ui_icon_flags(){
		$data['IconMain']   = "desktop";
        $data['page_title_main'] = "UI Elements";
		$this->load->view('ui-icon-flags',$data);
	}	
	public function ui_grid(){
		$data['IconMain']   = "desktop";
        $data['page_title_main'] = "UI Elements";
		$this->load->view('ui-grid',$data);
	}
	public function ui_treeview(){
		$data['IconMain']   = "desktop";
        $data['page_title_main'] = "UI Elements";
		$this->load->view('ui-treeview',$data);
	}
	public function ui_nestable_list(){
		$data['IconMain']   = "desktop";
        $data['page_title_main'] = "UI Elements";
		$this->load->view('ui-nestable-list',$data);
	}
	public function ui_jqui(){
		$data['IconMain']   = "desktop";
        $data['page_title_main'] = "UI Elements";
		$this->load->view('ui-jqui',$data);
	}	
	public function ui_typography(){
		$data['IconMain']   = "desktop";
        $data['page_title_main'] = "UI Elements";
		$this->load->view('ui-typography',$data);
	}						
}
