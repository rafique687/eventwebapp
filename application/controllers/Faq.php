<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->helper('url', 'form');
    $this->load->library('session');
    $this->load->model('Product_Model');
    $this->load->model('home_model');
    $this->load->model('customer_modal');
    $this->load->library('form_validation');
  }

	public function index()
	{ 
		$condi = array('section_id' =>8);
		$data['logo'] = $this->home_model->home("setting_table",$condi);
		$data['content'] = "vcreate/faqs.php";
		$this->load->view('front',$data);
	}

	
	
}
?>




	