<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	$condi = array('section_id' =>7);	
	$logo = array('section_id' =>1);
	$basic = array('section_id' =>6);
	$data['basic'] = $this->home_model->home("setting_table",$basic);
	$data['logo'] = $this->home_model->home("setting_table",$logo);
	$data['contentt'] = $this->home_model->home("setting_table",$condi);
	$fav = array('sessting_id' =>5);
	$data['fav'] = $this->home_model->home("setting_table",$fav);
	$status = array('service_status' => 1 );
	$data['services']=$this->home_model->services('services',$status);
	$statuss = array('status' => 1 );
	$data['testimonials']=$this->home_model->testimonials('testimonials',$statuss);
	//echo "<pre>"; print_r($data);exit;
	$data['content'] = "event/index.php";
	$this->load->view('front',$data);
}
	public function about()
	{ 
		$condi = array('sessting_id' =>$_GET['id']);
		$logo = array('sessting_id' =>4);
		$data['logo'] = $this->home_model->home("setting_table",$logo);
		
		$fav = array('sessting_id' =>5);
		$data['fav'] = $this->home_model->home("setting_table",$fav);
		$logo = array('sessting_id' =>$_GET['id']);
		$data['content'] = $this->home_model->home("setting_table",$logo);
		echo  json_encode($data);exit;
	}

	
	public function insercustomer()
	{
		//echo "<pre>"; print_r($_POST);exit;
		$sessiontrue=$this->session->userdata("user_name");
			if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
			else
			{   
			  	$this->load->library('form_validation');
				$this->form_validation->set_rules('firstname', 'First Name', 'required');
				$this->form_validation->set_rules('lastname', 'Last Name', 'required');
				$this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
				$this->form_validation->set_rules('email', 'User Email', 'required');
				$this->form_validation->set_rules('mobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');
				$this->form_validation->set_rules('zipcode', 'Zip Code', 'required'); 
				$this->form_validation->set_rules('address', 'Address', 'required');
				if ($this->form_validation->run() == FALSE)
					{
						
					 	$data['firstname'] = $_POST['firstname'];
					 	 $data['lastname'] = $_POST['lastname'];
					 	  	$data['email'] = $_POST['email'];
					 		  $data['dob'] = $_POST['dob'];
					 	   $data['mobile'] = $_POST['mobile'];
					 	   $data['contry'] = $_POST['contry'];
					 		$data['state'] = $_POST['state'];
					 		 $data['city'] = $_POST['city'];
					 	  $data['zipcode'] = $_POST['zipcode'];
					 	  $data['address'] = $_POST['address'];
					 	   $data['contry'] = $this->adminlogin->contry("contry");
							$data['state'] = $this->adminlogin->contry("state");
							 $data['city'] = $this->adminlogin->contry("city");
					
						 $data['containt'] = "admin/add_customer.php";
					$this->load->view('admin.php',$data);
					}
				else
					{

					    $feeddata=array("first_name" => $_POST['firstname'],"last_name"=>$_POST['lastname'],
											  "dob"  => $_POST['dob'],	   	   "email" =>$_POST['email'],
											"mobile" => $_POST['mobile'],   "mobilealt"=>$_POST['mobilealt'],
										 "countryid" => $_POST['contry'],	 "stateid" => $_POST['state'],
										 	  "city" => $_POST['city'],	     "zipcode" => $_POST['zipcode'],
										   "address" => $_POST['address']
										);
						$fire= $this->customer_modal->addcustomer("cutomar_details",$feeddata);
						if($fire)
						{
							redirect("Customer");
						}	
			}




	}
}


public function basic()
{ 
	$basic = array('section_id' =>1);
	$or = array('section_id' =>6);
    
    $data['footer'] = $this->home_model->home("setting_table",$or);
    $data['basic'] = $this->home_model->home("setting_table",$basic);
    $data['baseurl']=base_url();
    print_r(json_encode($data));exit;
}

public function home()
{ 	
 	$page = array("section_id"=>$_GET['id']);
    $data = $this->home_model->home("setting_table",$page);
    
    print_r(json_encode($data));exit;
}
public function services()
{ 	//echo "ysd";exit;
 	$status = array("service_status"=>1);
    $data = $this->home_model->services("services",$status);
    print_r(json_encode($data));exit;
}
public function product()
{   //echo "yes";exit;
	$status = array("item_status"=>1);	
	//$or = array("status"=>2);
    $data = $this->home_model->product("item",$status);
    $data['url']=base_url();
    print_r(json_encode($data));exit;

}


public function aboutt()
{ 	
 	$page = array("section_id"=>$_GET['id']);
    $data['about'] = $this->home_model->home("setting_table",$page);
    if($_GET['id']==2)
    {
    $condi = array("bannerstatus"=>1,"banner_section"=>'about');
	}
	elseif($_GET['id']==3)
	{
	 $condi = array("bannerstatus"=>1,"banner_section"=>'temsncondition');
	}
	elseif($_GET['id']==4)
	{
	 $condi = array("bannerstatus"=>1,"banner_section"=>'privacy');
	}
	elseif($_GET['id']==5)
	{
	 $condi = array("bannerstatus"=>1,"banner_section"=>'service');
	}
	elseif($_GET['id']==8)
	{
	 $condi = array("bannerstatus"=>1,"banner_section"=>'faq');
	}
    $data['banner'] = $this->home_model->bannerr("banner",$condi);
    
    print_r(json_encode($data));exit;
}
public function banner()
{
	$condi = array("bannerstatus"=>1,"banner_section"=>'home');
    $data = $this->home_model->bannerr("banner",$condi);
   // print_r($data);exit;
    
    print_r(json_encode($data));exit;

}



public function event()
{
	$status = array("status"=>1);
	//$or = array("status"=>2);
    $data = $this->home_model->product("event",$status);
    $data['url']=base_url();
    print_r(json_encode($data));exit;

}

public function gellary()
{
	$where = array("parent_cateid"=>$_GET['id']);
	//$or = array("status"=>2);
    $data = $this->home_model->gellary("event_details",$where);
    $data['url']=base_url();
    print_r(json_encode($data));exit;

}
public function clientlist()
{
	$status = array("status"=>1);
	//$or = array("status"=>2);
    $data = $this->home_model->client("client",$status);
    $data['url']=base_url();
    print_r(json_encode($data));exit;

}


			
	
}





	