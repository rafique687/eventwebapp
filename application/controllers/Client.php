<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form');
        $this->load->library('session');
        $this->load->model('Client_Model');
        $this->load->model('Event_model');
        $this->load->model('Services_Model');
        $this->load->model('adminlogin');
        $this->load->model('home_model');
        $this->load->model('event_model');
        $this->load->library('form_validation');

      
    }

	public function index()
	{ //echo "string";exit;
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
		{
			redirect("dashboard/index");
		}
		else
		{  	 
			$data['due']=1;
			$data['all']=$this->adminlogin->allsetting("setting_table");
			$condi = array('verifystatus'=>0,'status'=>1);
			$data['team']=$this->Client_Model->team("client",$condi);
			//echo "<pre>"; print_r($data['team']);exit;
			$data['containt']='admin/view_client.php';
			$this->load->view("admin",$data);
		}
	}

	public function unapprove()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
		{
			redirect("dashboard/index");
		}
		else
		{  	
			$data['unapprove']=1;
			$data['all']=$this->adminlogin->allsetting("setting_table");
			$condi = array('verifystatus'=>2,'status'=>1);
			$data['team']=$this->Client_Model->team("client",$condi);
			//echo "<pre>"; print_r($data['team']);exit;
			$data['containt']='admin/view_client.php';
			$this->load->view("admin",$data);
		}

	}

	public function approved()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
		{
			redirect("dashboard/index");
		}
		else
		{  		
			$data['all']=$this->adminlogin->allsetting("setting_table");
			//$condi = array('verifystatus'=>1,'status'=>1);
			$condi = array('status'=>1);
			$data['team']=$this->Client_Model->team("client",$condi);
			//echo "<pre>"; print_r($data['team']);exit;
			$data['containt']='admin/view_approvedclient.php';
			$this->load->view("admin",$data);
		}

	}
	public function portfolio()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
		{
			redirect("dashboard/index");
		}
		else
		{  	
			$data['portfolio']='portfolio';
			$data['all']=$this->adminlogin->allsetting("setting_table");
			//$condi = array('verifystatus'=>1,'status'=>1);
			$condi = array('status'=>1);
			$data['team']=$this->Client_Model->portpolio("client",$condi);
			//echo "<pre>"; print_r($data['team']);exit;
			$data['containt']='admin/view_approvedclient.php';
			$this->load->view("admin",$data);
		}

	}
 
	public function addclient()
	{  
		$sessiontrue=$this->session->userdata("user_name");
			if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
			else
			{
				$data['all']=$this->adminlogin->allsetting("setting_table");
				$condi = array('service_status' => 1 );
                $or = array('service_status' => 2 );
				$data['event']=$this->Services_Model->viewservices("services",$condi,$or);
				//echo "<pre>"; print_r($data['event']);exit;
			    $data['containt']="admin/add_client.php";
				$this->load->view('admin.php',$data);
			}
	}

	public function add_photo()
	{  
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
		  	{
				redirect("dashboard/index");
		    }
		else
			{
				$data['maineventid']=$_GET['id'];
				$data['portfolio']='portfolio';
				$data['all']=$this->adminlogin->allsetting("setting_table");
				$data['containt']='admin/add_portfoliodetails.php';
				$this->load->view("admin",$data);
			}
	}


	public function jqueryaprove()
	{
		//echo "<pre>";print_r($_POST);exit();
		$condi = array('client_id' => $_POST['id']);
		$upd= array('verifystatus'=>$_POST['sts']);
		$data['event']=$this->Client_Model->aproveclient("client",$condi,$upd);
		return TRUE;
	}

	public function portfoliogallery()
	{
		//echo "<pre>"; print_r($_GET);
		$condi = array('section_id' =>2);	
		$logo = array('section_id' =>1);
		$basic = array('section_id' =>6);
		$data['basic'] = $this->home_model->home("setting_table",$basic);
		$data['logo'] = $this->home_model->home("setting_table",$logo);
		$data['contentt'] = $this->home_model->home("setting_table",$condi);
		$data['portfolio']='portfolio';
		$data['all']=$this->adminlogin->allsetting("setting_table");
		$condi = array('status'=>1);
		$data['album']=$this->Event_model->viewportfolio_details("portfolio_gallery",$_GET['id']);
		//echo "<pre>"; print_r($data['album']);exit;
		$data['content']='event/portfolio_gallery.php';
		$this->load->view('front',$data);
	}

	public function random_string($length)
	{
	    $key = '';
	    $keys = array_merge(range(0, 9), range('a', 'z'));

		for ($i = 0; $i < $length; $i++)
		{
	        $key .= $keys[array_rand($keys)];
	    }

	    return $key;
	}

	public function uploadfiles()
	{
		//echo "<pre>"; print_r($_FILES);exit;	
		$name = $_FILES['file']['name'];
		$config['upload_path']          = './client/';
		$userpic= $_FILES['file']['name']= $_FILES['file']['name'];
		$_FILES['file']['type']= $_FILES['file']['type'];
		$_FILES['file']['tmp_name']= $_FILES['file']['tmp_name'];
		$_FILES['file']['error']= $_FILES['file']['error'];
		$_FILES['file']['size']= $_FILES['file']['size'];    
		$uploadPath = './client/';
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('file');
	
		echo json_encode($name);
		exit();
	}

	public function add_client()
	{	//echo "<pre>"; print_r($_POST);exit;
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else{

			$data['all']=$this->adminlogin->allsetting("setting_table");	
							//echo "<pre>";print_r($_POST);exit; 
						$timee=$_POST['hr'].":00";
						$edate= $_POST['edate']." ".$timee;
						$groomnprinciple='';
						$bridendesignation='';
						if(!empty($_POST['gname']))
						{
							$groomnprinciple=$_POST['gname'];
							$bridendesignation=$_POST['bname'];
						}
						else
						{
							$groomnprinciple=$_POST['principle'];
							$bridendesignation=$_POST['degination'];
						}
						 $datta = array('catid'=>$_POST['category'],
						 				'name'  => $_POST['name'],
										'lname'=> $_POST['lname'],
										'gname'=> $groomnprinciple,//principle also
										'bname'=> $bridendesignation,//designation
										'bdayname'=> $_POST['whosename'],
										'relation'=> $_POST['relation'],
										'mobile'  => $_POST['mobile'],
										'altmobile'=>$_POST['altmobile'],
										'edate'	=> $edate,
										'etime' => $timee,
										'venue' => $_POST['venue'],
										'city' => $_POST['city'],
										'email' => $_POST['email'],
										'altmobile'=>$_POST['altmobile'],
										'background'=>$_POST['cateimg']);
						 							// echo "<pre>";print_r($datta);exit();	
						$qry = $this->Client_Model->productinsert("client",$datta);
							if($qry)
								{
									
									redirect("Client/index?sucess=Client Add Successfully");
								}
						
					}
						}

		
	public function insertproduct()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
		{
			redirect("dashboard/index");
		}
		else
		{     $data['all']=$this->adminlogin->allsetting("setting_table");	

      			$config['upload_path']          = './products/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1000;
                $config['max_height']           = 7680;
				$this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('productpic'))
                {
                    $data['imgerror'] = array('error' => $this->upload->display_errors());
                    $data['containt']="admin/add_category.php";
                    $this->load->view("admin.php",$data);
                }
                else
                {   $data['all']=$this->adminlogin->allsetting("setting_table");	
                	$datta = array('product_name' => $_POST['product_name'],
                					'product_pic' => $_FILES['productpic']['name'],
                					 "parent_id"  =>$_POST['p_cate'],
                					    "status"  =>$_POST['stockstatus'] );
                	$qry = $this->Product_Model->productinsert("products",$datta);
	                  if($qry)
	                    {
	                    $data['success']="Category Successfuly Inserted";
	                	$data['containt']="admin/add_category.php";
                        $this->load->view("admin.php",$data);
	                    }
                }
        }
	}

	
	

	



	//***********Delet Product****************************************
	public function deleteproduct()
	{ 
		//echo "<pre>"; print_r($_GET);exit;
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
			else
			{   $data['all']=$this->adminlogin->allsetting("setting_table");	
				$condi=array("client_id"=>$_GET['id']);
				//$upd=array('status' =>0);
				$del=$this->Client_Model->deleteclient('client',$condi);
				redirect("client/index?sucess=Client Successfully Deleted");
			}
	}

							
	public function editclient()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else
			{
				$data['all']=$this->adminlogin->allsetting("setting_table");
				$condi = array('service_status' => 1 );
                $or = array('service_status' => 2 );
				$data['service']=$this->Services_Model->viewservices("services",$condi,$or);	
				$condi=array("client_id"=>$_GET['id']);
				$data['editid']=$_GET['id'];
				$data['client']=$this->Client_Model->editteam('client',$condi);
				//echo "<pre>";print_r($data['client']);exit;
				$data['containt']="admin/edit_client.php";
				$this->load->view("admin",$data);
			}
	}

	public function clientdetails()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else
			{
				$data['all']=$this->adminlogin->allsetting("setting_table");	
				$condi=array("client_id"=>$_GET['id']);
				$data['editid']=$_GET['id'];
				$data['details']=$this->Client_Model->details_client('client',$condi);
				//echo "<pre>";print_r($data['details']);exit;
				$data['containt']="admin/details_client.php";
				$this->load->view("admin",$data);
			}
	}


public function edit_insert()
	{ 
		//echo "<pre>"; print_r($_POST);exit;
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else
			{
											
					$condi=array("client_id"=>$_POST['gett']);
					$data['all']=$this->adminlogin->allsetting("setting_table");	
							//echo "<pre>";print_r($_POST);exit; 
						$timee=$_POST['hr'].":0".$_POST['mn'].$_POST['ampm'];
						$groomnprinciple='';
						$bridendesignation='';
						if(!empty($_POST['gname']))
						{
							$groomnprinciple=$_POST['gname'];
							$bridendesignation=$_POST['bname'];
						}
						else
						{
							$groomnprinciple=$_POST['principle'];
							$bridendesignation=$_POST['degination'];
						}
						 $datta = array('catid'=>$_POST['category'],
						 				'name'  => $_POST['name'],
										'lname'=> $_POST['lname'],
										'gname'=> $groomnprinciple,//principle also
										'bname'=> $bridendesignation,//designation
										'bdayname'=> $_POST['whosename'],
										'relation'=> $_POST['relation'],
										'mobile'  => $_POST['mobile'],
										'altmobile'=>$_POST['altmobile'],
										'edate'	=> $_POST['edate'],
										'etime' => $timee,
										'venue' => $_POST['venue'],
										'city' => $_POST['city'],
										'email' => $_POST['email'],
										'altmobile'=>$_POST['altmobile']);
						 				
					$fire=$this->Client_Model->editinsert("client",$datta,$condi);
					if($fire)
						{
							redirect("client/index?sucess=Client Update Successfully");
						}
			}
		}
	

	public function delimage()
{
  //echo "<pre>"; print_r($_POST);exit;
	$condi=array("client_id"=>$_POST['cateid']);
				$getpic=$this->Client_Model->getimage('client',$condi);
				//echo '<pre>'; print_r($getpic);exit;
				if($getpic)
				{
					$pic_array=explode(",",$getpic['logo']);
					$no_Of_pic=count($pic_array);
					
						//unset($array[1]);
						
						for($i=0;$i<$no_Of_pic;$i++)
							{
								if($pic_array[$i]==$_POST['imgnam'])
								{
									unset($pic_array[$i]);
								}
							}
							
							$path= base_url().'client'.$_POST['imgnam'];
						
							delete_files("client".$path,TRUE);
							

			/**************upadate in database********************************** */
			$impd=implode(",",$pic_array);
			$upd=array("logo"=>$impd);
			
			$getpic=$this->Client_Model->imageupdate('client',$condi,$upd);
			

					
				}
}

public function inserteventdetails()
	{  // echo "<pre>"; print_r($_POST);exit();
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
		  	{ 
				redirect("dashboard/index");
		    }
		else
			{
				
				if(!empty($_FILES['video']['name']))
				{  //echo "<pre>";print_r($_POST);exit;
					 $userpic= $_FILES['video']['name']= $_FILES['video']['name'];
					 $userpic= $_FILES['video']['name']= $_FILES['video']['name'];
        			 $_FILES['video']['type']= $_FILES['video']['type'];
        			 $_FILES['video']['tmp_name']= $_FILES['video']['tmp_name'];
        			 $_FILES['video']['error']= $_FILES['video']['error'];
        			 $_FILES['video']['size']= $_FILES['video']['size']; 
        			 $_FILES['video']['max_size'] = '100000';
        			 $_FILES['video']['max_width'] = '30000';
        			 $_FILES['video']['max_height'] = '30000';   
					 $uploadPath = './event/';
           			 $config['upload_path'] = $uploadPath;
           			 $config['allowed_types'] = 'mov|avi|flv|wmv|mp3|mp4|gif';
           			 $config['encrypt_name'] = TRUE; 
              		 $config['overwrite'] = TRUE;
           			 $this->load->library('upload', $config);
					 $this->upload->initialize($config);
					 if(!$this->upload->do_upload('video'))
							{   
								
								 $error=$this->response = $this->upload->display_errors();
								 echo "<pre>";print_r($error);exit;
								
							}

							else
							{
								$adddata=array("partyid"=> $_POST['mainid'],
											   "eventvideo_photo_url"=> $_FILES['video']['name'],
												"title"=>$_POST['title']);
								$fire=$this->event_model->insert_eventdetails("portfolio_gallery",$adddata);
								if($fire)
								{
									redirect("client/vieweventdetails?eventid=".$_POST['mainid']."&success=Even Video Upload Successfully");
								}
							}
				}
			}
		}

			public function  inserteventphotodetails()
				{  //echo "<pre>"; print_r($_POST);exit;
					$adddata=array("partyid"=> $_POST['mainid'],
								   "eventvideo_photo_url"=>$_POST['cateimg'] ,
												  "title"=> $_POST['phototitle']);
					$fire=$this->event_model->insert_eventdetails("portfolio_gallery",$adddata);
						if($fire)
						{
							redirect("client/vieweventdetails?eventid=".$_POST['mainid']."&success=Even Photo Upload Successfully");
						}
					}

public function inserteventurldetails()
	{	
			 //print_r($_POST);exit;
				 //echo "url";exit;
					$adddata=array("partyid"=> $_POST['mainid'],
								   "eventvideo_photo_url"=> $_POST['url'],
												  "title"=> $_POST['urltitle']);
					$fire=$this->event_model->insert_eventdetails("portfolio_gallery",$adddata);
						if($fire)
						{
							redirect("client/vieweventdetails?eventid=".$_POST['mainid']."&success=Even url Upload Successfully");
						}
	}

	public function vieweventdetails()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
		  	{
				redirect("dashboard/index");
		    }
		else
			{
				$data['all']=$this->adminlogin->allsetting("setting_table");
				$where=array("partyid"=>$_GET['eventid']);
				$data['event_details']=$this->event_model->viewportfolio_details("portfolio_gallery",$_GET['eventid']);
				//echo "<pre>"; print_r($data['event_details']);exit;
				$data['containt']='admin/portfolio_details.php';
				$this->load->view("admin",$data);
			}
	}

	public function deleteeventalbum()
		{
			$sessiontrue=$this->session->userdata("user_name");
			if(!isset($sessiontrue))
		  	{ 
				redirect("dashboard/index");
		    }
			else
			{
				$condi = array('galleryid' => $_GET['id']);
				$fire=$this->event_model->deleteventpic("portfolio_gallery",$condi);
				if($fire)
				{
				redirect("client/vieweventdetails?eventid=".$_GET['eventid']);
			    }
			}
		}
		



}
				