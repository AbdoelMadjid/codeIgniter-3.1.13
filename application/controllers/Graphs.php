<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Graphs extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function graph_flot(){
		$data['IconMain']   = "bar-chart-o";
        $data['page_title_main'] = "Graph";
		$this->load->view('graph-flot',$data);
	}
	public function graph_morris(){
		$data['IconMain']   = "bar-chart-o";
        $data['page_title_main'] = "Graph";
		$this->load->view('graph-morris',$data);
	}
	public function graph_sparkline_charts(){
		$data['IconMain']   = "bar-chart-o";
        $data['page_title_main'] = "Graph";
		$this->load->view('graph-sparkline-charts',$data);
	}
	public function graph_easypie_charts(){
		$data['IconMain']   = "bar-chart-o";
        $data['page_title_main'] = "Graph";
		$this->load->view('graph-easypie-charts',$data);
	}
	public function graph_dygraphs(){
		$data['IconMain']   = "bar-chart-o";
        $data['page_title_main'] = "Graph";
		$this->load->view('graph-dygraphs',$data);
	}
	public function graph_chartjs(){
		$data['IconMain']   = "bar-chart-o";
        $data['page_title_main'] = "Graph";
		$this->load->view('graph-chartjs',$data);
	}
	public function graph_hchartable(){
		$data['IconMain']   = "bar-chart-o";
        $data['page_title_main'] = "Graph";
		$this->load->view('graph-hchartable',$data);
	}
}
