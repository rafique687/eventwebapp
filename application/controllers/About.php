<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

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
		$condi = array('section_id' =>2);	
		$logo = array('section_id' =>1);
		$basic = array('section_id' =>6);
		$data['basic'] = $this->home_model->home("setting_table",$basic);
		$data['logo'] = $this->home_model->home("setting_table",$logo);
		$data['contentt'] = $this->home_model->home("setting_table",$condi);
		$fav = array('sessting_id' =>5);
		$statuss = array('status' => 1 );
		$data['testimonials']=$this->home_model->testimonials('testimonials',$statuss);
		$data['fav'] = $this->home_model->home("setting_table",$fav);
		//echo "<pre>"; print_r($data);exit;
		$data['content'] = "event/about.php";
		$this->load->view('front',$data);
	}

	
	
}
?>




	