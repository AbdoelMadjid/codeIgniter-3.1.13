<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appviews extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
  
	public function views_projects(){
		$data['IconMain']   = "file-text-o";
        $data['page_title_main'] = "App Views";
		$this->load->view('views-projects',$data);
	}
	public function views_blog(){
		$data['IconMain']   = "paragraph";
        $data['page_title_main'] = "App Views";		
		$this->load->view('views-blog',$data);
	}
	public function views_gallery(){
		$data['IconMain']   = "picture-o";
        $data['page_title_main'] = "App Views";	
		$this->load->view('views-gallery',$data);
	}
	public function views_forum(){
		$data['IconMain']   = "comments";
        $data['page_title_main'] = "App Views";	
		$this->load->view('views-forum',$data);
	}
	public function views_forum_topic(){
		$data['IconMain']   = "comments";
        $data['page_title_main'] = "App Views";	
		$this->load->view('views-forum-topic',$data);
	}
	public function views_forum_post(){
		$data['IconMain']   = "comments";
        $data['page_title_main'] = "App Views";	
		$this->load->view('views-forum-post',$data);
	}
	public function views_profile(){
		$data['IconMain']   = "user-circle-o";
        $data['page_title_main'] = "App Views";	
		$this->load->view('views-profile',$data);
	}
	public function views_timeline(){
		$data['IconMain']   = "clock-o";
        $data['page_title_main'] = "App Views";	
		$this->load->view('views-timeline',$data);
	}
	public function views_search(){
		$data['IconMain']   = "search";
        $data['page_title_main'] = "App Views";	
		$this->load->view('views-search',$data);
	}
}
