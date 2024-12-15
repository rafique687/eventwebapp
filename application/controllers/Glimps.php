<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Glimps extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->helper('url', 'form');
    $this->load->library('session');
    $this->load->model('Product_Model');
    $this->load->model('home_model');
    $this->load->model('customer_modal');
     $this->load->model('gallery');
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
		$data['galleryname']=$this->gallery->galleryname("event");
		$data['photo']=$this->gallery->photo("event_details");
		//echo "<pre>"; print_r($data['photo']);exit;
		$data['content'] = "event/gallery.php";
		$this->load->view('front',$data);
	}

	
	
}
?>




	