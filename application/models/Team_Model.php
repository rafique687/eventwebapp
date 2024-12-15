<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team_Model extends CI_Model {

	public function productinsert($tab,$data)
	{
		$fire=$this->db->insert($tab,$data);
		//echo "<pre>"; print_r($fire);
		  
    	return true;
	}

	public function team($tab,$condi)
	{
		$today=date('Y-m-d');
		$this->db->select("*");
		$this->db->from("client as clt");
		$this->db->join('services srv','clt.catid=srv.service_id','inner');
		$this->db->where($condi);
		$this->db->where('clt.edate >=',$today);
		$qry=$this->db->get();
		return $qry->result_array();
	}


	public function maincategoryy($tab,$condi)
	{
		$this->db->select("*");
		$this->db->where($condi);
		$this->db->or_where($or);
		$qry=$this->db->get($tab);
		return $qry->result_array();
	}



	//***********Fetch item row for edit******************
	public function editteam($tab,$condi)
	{
			$this->db->select('*');
		    $this->db->where($condi);
			$this->db->from($tab);
			$query = $this->db->get();
			return $query->row_array();

	}

	//**********Delete Product******************************
	public function deleteProduct($tab,$condi,$upd)
	{
		$this -> db -> where($condi);
    	$this -> db -> update($tab,$upd);
    	return true;
	}

	public function imageupdate($tab,$condi,$upd)
	{
		$this -> db -> where($condi);
    	$this -> db -> update($tab,$upd);
    	return true;
	}

	public function editinsert($tab,$upd,$condi)
	{
		$this -> db -> where($condi);
    	$this -> db -> update($tab,$upd);
    	return true;

	}

}
    