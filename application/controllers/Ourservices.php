<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ourservices extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->helper('url', 'form');
    $this->load->library('session');
    $this->load->model('Product_Model');
    $this->load->model('home_model');
     $this->load->model('services_Model');
    $this->load->model('customer_modal');
    $this->load->library('form_validation');
  }

	public function index()
	{ 
		$condi = array('section_id' =>5);	
		$logo = array('section_id' =>1);
		$basic = array('section_id' =>6);
		$data['basic'] = $this->home_model->home("setting_table",$basic);
		$data['logo'] = $this->home_model->home("setting_table",$logo);
		$data['contentt'] = $this->home_model->home("setting_table",$condi);
		$fav = array('sessting_id' =>5);
		$data['fav'] = $this->home_model->home("setting_table",$fav);
		$status=array("service_status"=>1);
		$data['services']=$this->services_Model->services('services',$status);
		$data['logistics']=$this->services_Model->services('logistics',$status);
		//echo "<pre>"; print_r($data);exit();
		$data['content'] = "event/services.php";
		$this->load->view('front',$data);
	}

	
	
}
?>




	