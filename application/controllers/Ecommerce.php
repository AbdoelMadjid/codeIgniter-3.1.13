<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ecommerce extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
  
	public function ecommerce_orders(){
		$this->load->view('ecommerce-orders');
	}
	public function ecommerce_products_view(){
		$this->load->view('ecommerce-products-view');
	}
	public function ecommerce_products_detail(){
		$this->load->view('ecommerce-products-detail');
	}
}
