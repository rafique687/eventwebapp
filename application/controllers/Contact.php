<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
    	$data['baseurl']=base_url();
    	//echo "<pre>"; print_r($data);exit;
		$data['content'] = "event/contact.php";
		$this->load->view('front',$data);
	}
public function inquery()
{ 
            $maildate=date("y-m-d");
            $emaildata= array(
                                "inqury_name"    => $_POST['name'] ,
                                "inquery_email"  => $_POST['email'],
                                "mobile"  => $_POST['mobile'],
                                "message"        => $_POST['comments'],
                                "inquery_date"   => $maildate
                            );
            if($fire=$this->customer_modal->stormaildetails("inquety",$emaildata))
            {
            		echo "Your Enquery Sent Successfully";
            } 
            else
            {   
                echo "Your Enquery Could Not Be Submit,Try Again";
            }
    
    }

    public function modalinquery()
    {   // echo "<pre>"; print_r($_POST);
         $maildate=date("y-m-d");
            $emaildata= array(
                                "name"    => $_POST['name'] ,
                                "email"  => $_POST['email'],
                                "contact"  => $_POST['cnt'],
                                "inquery_date"   => $maildate
                            );
            if($fire=$this->customer_modal->stormaildetails("sponsor_request",$emaildata))
            {
                    echo "Your Rquest Sent Successfully";
            } 
            else
            {   
                echo "Your Rquest Could Not Be Submit,Try Again";
            }

    }


public function contactform()
{
    $this->load->library('form_validation');
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('contact', 'Last Name', 'required');
    $this->form_validation->set_rules('date', 'Event Date', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('venue', 'Venue', 'required'); 
    $this->form_validation->set_rules('ocacasion', 'Ocacasion', 'required');
    $this->form_validation->set_rules('guest', 'Number of Guest', 'required');
    $this->form_validation->set_rules('budget', 'Budget', 'required');
    $this->form_validation->set_rules('message', 'message', 'required');
    if ($this->form_validation->run() == FALSE)
        {
            $data['name'] = $_POST['name'];
            $data['contact'] = $_POST['contact'];
            $data['email'] = $_POST['email'];
            $data['date'] = $_POST['date'];
            $data['venue'] = $_POST['venue'];
            $data['ocacasion'] = $_POST['ocacasion'];
            $data['guest'] = $_POST['guest'];
            $data['budget'] = $_POST['budget'];
            $data['message'] = $_POST['message'];
            $data['content'] = "event/contact.php";
            $this->load->view('front',$data);
        }
    else
        {
            //echo "<pre>"; print_r($_POST);exit;
            $maildate=date("y-m-d");
            $emaildata= array
                        (
                        "name"       => $_POST['name'] ,
                        "email"      => $_POST['email'],
                        "contact"    => $_POST['contact'],
                        "inquery_date" => $maildate,
                        "date"       => $_POST['date'],
                        "venue"      => $_POST['venue'],
                        "ocacasion"  => $_POST['ocacasion'],
                        "guest"      => $_POST['guest'],
                        "budget"     => $_POST['budget'],
                        "message"    => $_POST['message'],

                        );
if($fire=$this->customer_modal->stormaildetails("contactform",$emaildata))
{
    $this->session->set_flashdata('msg', 'Your Inquery Successfully Submit');
   
}
else
{
     $this->session->set_flashdata('msg', 'Problem to Inquery Submit');
    
}
 redirect('Contact/index');

}

}	

public function news()
{
    //echo "<pre>"; print_r($_POST);exit;
     $maildate=date("y-m-d");
            $emaildata= array
                        (
                        "email"       => $_POST['email'] ,
                        "date"      => $maildate
                        );
    if($fire=$this->customer_modal->stormaildetails("newsletter",$emaildata))
      {
        $this->session->set_flashdata('news', 'Successfully Send');
        redirect('home/index');
      }
    else
    {
     $this->session->set_flashdata('news', 'Problem to Send');
     redirect('home/index');
    }
}

public function viewnews()
{
    $sessiontrue=$this->session->userdata("user_name");
    if(!isset($sessiontrue))
    {
        redirect("dashboard/index");
    }
    else
    {

        $data['news'] = $this->customer_modal->viewnewsletter("newsletter");
        //echo "<pre>"; print_r($data['news']);exit;
        $data['containt']="admin/viewnewsletter.php";
        $this->load->view('admin.php',$data);
    }
}

public function contactforminquery()
{
    $sessiontrue=$this->session->userdata("user_name");
    if(!isset($sessiontrue))
    {
        redirect("dashboard/index");
    }
    else
    {

        $data['enquery'] = $this->customer_modal->viewnewsletter("contactform");
        //echo "<pre>"; print_r($data['enquery']);exit;
        $data['containt']="admin/form_inquery.php";
        $this->load->view('admin.php',$data);
    }
}
public function commaninquery()
{
    $sessiontrue=$this->session->userdata("user_name");
    if(!isset($sessiontrue))
    {
        redirect("dashboard/index");
    }
    else
    {

        $data['enquery'] = $this->customer_modal->viewnewsletter("inquety");
        //echo "<pre>"; print_r($data['enquery']);exit;
        $data['containt']="admin/view_enquery.php";
        $this->load->view('admin.php',$data);
    }
}
}


?>




	