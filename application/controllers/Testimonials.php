<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form');
        $this->load->library('session');
        $this->load->model('Product_Model');
        $this->load->model('adminlogin');
        $this->load->library('form_validation');

      
    }

	public function index()
	{   			
	    $data['all']=$this->adminlogin->allsetting("setting_table");
	    $status=array('status'=>1);
	    $data['review']=$this->Product_Model->testimonials("testimonials",$status);
	    //echo "<pre>"; print_r($data['review']);exit;
	    $data['containt']="admin/view_testimonials.php";
		$this->load->view('admin.php',$data);
	}

	public function add_testimonials()
	{  
		$sessiontrue=$this->session->userdata("user_name");
			if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
			else
			{
				
					$data['all']=$this->adminlogin->allsetting("setting_table");	
				    $data['all']=$this->adminlogin->allsetting("setting_table");
				    $data['containt']="admin/add_testimonials.php";
					$this->load->view('admin.php',$data);

	    }
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
		$name = $_FILES['file']['name'];
		$config['upload_path']          = './products/';
		$userpic= $_FILES['file']['name']= $_FILES['file']['name'];
		$_FILES['file']['type']= $_FILES['file']['type'];
		$_FILES['file']['tmp_name']= $_FILES['file']['tmp_name'];
		$_FILES['file']['error']= $_FILES['file']['error'];
		$_FILES['file']['size']= $_FILES['file']['size'];    
		$uploadPath = './products/';
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('file');
		echo json_encode($name);
		exit();
	}

	public function add_maiandsubcate()
	{	
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else{
				$data['all']=$this->adminlogin->allsetting("setting_table");	
				$this->load->library('form_validation');
				$this->form_validation->set_rules('product_name', 'Category Name', 'required');
				$this->form_validation->set_rules('des', 'Category Description', 'required');
				if ($this->form_validation->run() == FALSE)
					{
						$data['product_name']=$_POST['product_name'];
						$data['des']=$_POST['des'];
						$data['pid']=$_POST['p_cate'];
						$data['containt']="admin/add_category.php";
						$this->load->view("admin",$data);
					}
					else
					{  
						$datta = array('product_name' => $_POST['product_name'],
										'product_pic'  => $_POST['cateimg'],
										"parent_id"    => $_POST['p_cate'],
										"description"  => $_POST['des'],
										"status"	   => $_POST['stockstatus'],
										"main_cate"	   => $_POST['p_cate'] );
						$qry = $this->Product_Model->productinsert("products",$datta);
							if($qry)
								{
									if($_POST['p_cate']==0)
									{
									redirect("category/viewcategory?sucess=Category Successfully Added &id=".$_POST['p_cate']);
									}
									else
									{
										redirect("category/viewcategory?category=".$_POST['p_cate']."& sucess=Sub Category Successfully Added &id=1");	
									}
								}
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

	
	//*****************udate product status***********************
	public function category_status()
	{   
		$condi=array("prod_id"=>$_GET['id']);
		$upd=array("status"=>2);
		$data['product']=$this->Product_Model->statusupdate("products",$condi,$upd);
		return true;
	}
	//************************************************************
	

	public function insert()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
				redirect("dashboard/index");
			}
		else
			{
					//echo "<pre>" ; print_r($_POST);exit;
				$imploadpicname= $_POST['cateimg'];
				$datta = array('name' => $_POST['product_name'],
								"status"=>$_POST['stockstatus'],
								'image'   =>$imploadpicname,
								"review"=>$_POST['des']);
						$qry = $this->Product_Model->productinsert("testimonials",$datta);
					if($qry)
						{
							
							redirect("Testimonials/index?sucess=testimonials Successfully Stored");
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
				$condi=array("id"=>$_GET['id']);
				$upd=array('status' =>0);
				$del=$this->Product_Model->deleteProduct('testimonials',$condi,$upd);
				redirect("Testimonials/index?category=".$_GET['category'].'&sucess=Testimonials Successfully Delete');
			}
	}

	public function deletesubcate()
	{
		$sessiontrue=$this->session->userdata("user_name");
		if(!isset($sessiontrue))
			{
			redirect("dashboard/index");
			}
			else
			{
			$condi=array("prod_id"=>$_GET['id']);
			$upd=array('status' =>0);
			$del=$this->Product_Model->deleteProduct('products',$condi,$upd);
			redirect("product/viewcategory/?id=0");
			}
	}
							
	
}
				