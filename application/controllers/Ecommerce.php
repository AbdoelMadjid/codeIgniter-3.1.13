<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ecommerce extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
  
	public function ecommerce_orders(){
		$data['IconMain']   = "shopping-cart";
        $data['page_title_main'] = "E-Commerce";
		$this->load->view('ecommerce-orders',$data);
	}
	public function ecommerce_products_view(){
		$data['IconMain']   = "shopping-cart";
        $data['page_title_main'] = "E-Commerce";		
		$this->load->view('ecommerce-products-view',$data);
	}
	public function ecommerce_products_detail(){
		$data['IconMain']   = "shopping-cart";
        $data['page_title_main'] = "E-Commerce";
		$this->load->view('ecommerce-products-detail',$data);
	}
}
