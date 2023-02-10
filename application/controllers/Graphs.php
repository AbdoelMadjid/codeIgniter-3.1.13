<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Graphs extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function graph_flot(){
		$this->load->view('graph-flot');
	}
	public function graph_morris(){
		$this->load->view('graph-morris');
	}
	public function graph_sparkline_charts(){
		$this->load->view('graph-sparkline-charts');
	}
	public function graph_easypie_charts(){
		$this->load->view('graph-easypie-charts');
	}
	public function graph_dygraphs(){
		$this->load->view('graph-dygraphs');
	}
	public function graph_chartjs(){
		$this->load->view('graph-chartjs');
	}
	public function graph_hchartable(){
		$this->load->view('graph-hchartable');
	}
}
