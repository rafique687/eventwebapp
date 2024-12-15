<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Packages extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->helper('url', 'form');
    $this->load->library('session');
    $this->load->model('Product_Model');
    $this->load->model('Services_Model');
    $this->load->model('adminlogin');
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
		$status=array("service_status"=>1);
		$data['package']=$this->Services_Model->allpackage('package',$status);
		//echo "<pre>";print_r($data['package']);exit;
		$data['content'] = "event/Packages.php";
		$this->load->view('front',$data);
	}


	public function ourpackage()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
			redirect("dashboard/index");
			}
		else
			{
                $condi = array('service_status' => 1 );
                $or = array('service_status' => 2 );
				$data['all']=$this->adminlogin->allsetting("setting_table");	
				$data['product']=$this->Services_Model->viewservices("package",$condi,$or);
				//echo "<pre>"; print_r($data['product']);exit;
				$data['containt']='admin/view_package.php';
				$this->load->view("admin",$data);
			}
	}

	public function addpackage()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
		{
			redirect("dashboard/index");
		}
		else
		{
			$data['all']=$this->adminlogin->allsetting("setting_table");
			$data['containt']="admin/add_package.php";
			$data['parent_cate']=$this->Product_Model->mainproduct("products");
			$this->load->view('admin.php',$data);
			//redirect("product/view_product?success=Product Successfully stored");
		}
	}


	public function insert_package()
	{
		//echo "<pre>"; print_r($_POST);exit;
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else
			{
			$data['all']=$this->adminlogin->allsetting("setting_table");
			$this->load->library('form_validation');
			$this->form_validation->set_rules('product_name', 'Package Name', 'required');
			$this->form_validation->set_rules('caption', 'caption name', 'required');
			$this->form_validation->set_rules('price', 'Package Price', 'required');
				if ($this->form_validation->run() == FALSE)
				{
					$data['product_name']=$_POST['product_name'];
					$data['caption']=$_POST['caption'];
					$data['stockstatus']=$_POST['stockstatus'];
					$data['price']=$_POST['price'];
					$data['containt']="admin/add_package.php";
					$this->load->view("admin",$data);
				}
				else
				{
					$datta = array('package_name'    => $_POST['product_name'],
									"service_status" =>$_POST['stockstatus'],
									'image'    =>$_POST['cateimg'],
									'caption'    =>$_POST['caption'],
									"package_price" =>$_POST['price']
									);
					$qry = $this->Product_Model->productinsert("package",$datta);
						if($qry)
						{
							redirect("packages/ourpackage?ourpackage=Package Successfully Added");
						}
				}
			}
	}

		public function inser_edititem()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
			redirect("dashboard/index");
			}
		else
			{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('product_name', 'Package Name', 'required');
			$this->form_validation->set_rules('caption', 'caption name', 'required');
			$this->form_validation->set_rules('price', 'Package Price', 'required');
			if ($this->form_validation->run() == FALSE)
			{
				$condi=array("item_id"=>$_POST['gett']);
				$data['editid']=$_POST['gett'];
				$data['product_name']=$_POST['product_name'];
				$data['caption']=$_POST['caption'];
				$data['stockstatus']=$_POST['stockstatus'];
				$data['price']=$_POST['price'];
				$data['containt']="admin/edit_service.php";
				$this->load->view("admin",$data);
			}
			else
			{
				if(!empty($_POST['cateimg']))
				{
				echo $newpic=$_POST['cateimg'].','.$_POST['oldpic'];
			    }
			    else
			    {
			    	echo $newpic=$_POST['oldpic'];
			    }
				$data['product_name']=$_POST['product_name'];
				$data['product_name']=$_POST['des'];
				$data['stockstatus']=$_POST['stockstatus'];
				
				$condi=array("packageid "=>$_POST['gett']);
				$field=array("package_name"=> $_POST['product_name'],
							 "caption" 	=> $_POST['caption'],
							  "image"  	=> $newpic,
								"package_price"  => $_POST['price']
							);
				$fire=$this->Product_Model->editinsert("package",$field,$condi);
				if($fire)
				{ 
					redirect("packages/ourpackage?success=Package Successfully Updated");
				}
			}
		}
	}


	public function uploadfiles()
	{
		$sessiontrue=$this->session->userdata("user_name");
	if(!isset($sessiontrue))
		{
			redirect("dashboard/index");
		}
		else
		{
		if(!empty($_FILES))
		{
		$name = $_FILES['file']['name'];
		$config['upload_path']          = './package/';
		$userpic= $_FILES['file']['name']= $_FILES['file']['name'];
		$_FILES['file']['type']= $_FILES['file']['type'];
		$_FILES['file']['tmp_name']= $_FILES['file']['tmp_name'];
		$_FILES['file']['error']= $_FILES['file']['error'];
		$_FILES['file']['size']= $_FILES['file']['size'];    
		$uploadPath = './package/';
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('file');
		echo json_encode($name);
			exit();
		}
		
		}
	}

	public function item_status()
	{  //print_r($_GET);exit;
		$idexp=explode(",",$_GET['id']);
		//print_r($idexp);exit;
		$condi=array("packageid "=>$idexp[0]);
		if($idexp[1]==2)
		{
			 $upd=array("service_status"=>1);
		}
		else
		{
			$upd=array("service_status"=>2);
		}
		 $data['product']=$this->Product_Model->statusupdate("package",$condi,$upd);
		return true;
	}

	public function deleteitem()
	{  
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
			else
			{
				$condi = array('packageid' => $_GET['id'] );
				$datt=array("service_status"=>0);
				$del=$this->Product_Model->deleteProduct('package',$condi,$datt);
				redirect("packages/ourpackage?success=Package Successfully Deleted");
			}
	}

	public function edititem()
	{ //echo "fjk";exit;
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
			redirect("dashboard/index");
			}
		else
			{
			$condi=array("packageid "=>$_GET['id']);
			$data['editid']=$_GET['id'];
			$data['containt']="admin/edit_package.php";
			$data['product']=$this->Product_Model->itemrow('package',$condi);
			$this->load->view("admin",$data);
			}
	}

	public function delimage()
	{
 // echo "<pre>"; print_r($_POST);exit;
		$condi=array("packageid"=>$_POST['cateid']);
			$getpic=$this->Product_Model->getimage('package',$condi);
			if($getpic)
				{
					$pic_array=explode(",",$getpic['item_pic']);
					$no_Of_pic=count($pic_array);
					for($i=0;$i<$no_Of_pic;$i++)
						{
							if($pic_array[$i]==$_POST['imgnam'])
							{
								unset($pic_array[$i]);
							}
						}
							
					$path= base_url().'package'.$_POST['imgnam'];
				
					delete_files("package".$path,TRUE);
					
					/**************upadate in database********************************** */
					$impd=implode(",",$pic_array);
					$upd=array("item_pic"=>$impd);
					$getpic=$this->Product_Model->imageupdate('package',$condi,$upd);
				}
	}



	
	
}
?>




	