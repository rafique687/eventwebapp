<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->helper('url', 'form');
    $this->load->library('session');
    $this->load->model('Product_Model');
    $this->load->model('home_model');
    $this->load->model('client_Model');
    $this->load->model('customer_modal'); 
    $this->load->library('form_validation');
  }

	public function index()
	{  
		$condi = array('section_id' =>7);	
		$logo = array('section_id' =>1);
		$basic = array('section_id' =>6);
		$data['basic'] = $this->home_model->home("setting_table",$basic);
		$data['logo'] = $this->home_model->home("setting_table",$logo);
		$data['contentt'] = $this->home_model->home("setting_table",$condi);
		$fav = array('sessting_id' =>5);
		$data['fav'] = $this->home_model->home("setting_table",$fav);
		$data['contentt'] = $this->home_model->home("setting_table",$condi);
		$where = array('verifystatus'=>0,'status'=>1);
		$data['upcoming']=$this->client_Model->team("client",$where);
		//echo "<pre>"; print_r($data['upcoming']);exit;
		$data['content'] = "event/upcoming-event.php"; 
		$this->load->view('front',$data);
	}

	public function portfolio()
	{  
		$condi = array('section_id' =>7);	
		$logo = array('section_id' =>1);
		$basic = array('section_id' =>6);
		$data['basic'] = $this->home_model->home("setting_table",$basic);
		$data['logo'] = $this->home_model->home("setting_table",$logo);
		$data['contentt'] = $this->home_model->home("setting_table",$condi);
		$fav = array('sessting_id' =>5);
		$data['fav'] = $this->home_model->home("setting_table",$fav);
		$data['contentt'] = $this->home_model->home("setting_table",$condi);
		//$where = array('verifystatus'=>1,'status'=>1);
        $where = array('status'=>1);
		$data['upcoming']=$this->client_Model->portpolios("client",$where);
		//echo "<pre>"; print_r($data['upcoming']);exit;
		$data['content'] = "event/portfolio.php";
		$this->load->view('front',$data);
	}


		
}
?>




	