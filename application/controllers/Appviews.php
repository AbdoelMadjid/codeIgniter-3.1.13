<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appviews extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
  
	public function views_projects(){
		$this->load->view('views-projects');
	}
	public function views_blog(){
		$this->load->view('views-blog');
	}
	public function views_gallery(){
		$this->load->view('views-gallery');
	}
	public function views_forum(){
		$this->load->view('views-forum');
	}
	public function views_forum_topic(){
		$this->load->view('views-forum-topic');
	}
	public function views_forum_post(){
		$this->load->view('views-forum-post');
	}
	public function views_profile(){
		$this->load->view('views-profile');
	}
	public function views_timeline(){
		$this->load->view('views-timeline');
	}
	public function views_search(){
		$this->load->view('views-search');
	}
}
