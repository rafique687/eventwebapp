<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {
	
	
	public function maillist($tab)
	{
		$this->db->select("*");
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->result_array();
	}

	public function home($tab,$condi)
	{	$this->db->select("*");
		$this->db->where($condi);
		//$this->db->or_where($or);
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->result_array();
	}

	public function services($tab,$condi)
	{
		$this->db->select("*");
		$this->db->where($condi);
		$this->db->from($tab);
		$this->db->limit(3);
		$qry=$this->db->get();
		return $qry->result_array();

	}
	public function testimonials($tab,$condi)
	{
		$this->db->select("*");
		$this->db->where($condi);
		$this->db->from($tab);
		//$this->db->limit(3);
		$qry=$this->db->get();
		return $qry->result_array();

	}
	public function product($tab,$condi)
	{
		$this->db->select("*");
		$this->db->where($condi);
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->result_array();

	}
	public function gellary($tab,$where)
	{
		$this->db->select("*");
		$this->db->where($where);
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->row_array();

	}
	public function client($tab,$where)
	{
		$this->db->select("*");
		$this->db->where($where);
		$this->db->from($tab);
		 $this->db->limit(6);
		$qry=$this->db->get();
		return $qry->result_array();

	}
	public function bannerr($tab,$condi)
	{
		$this->db->select("*");
		$this->db->where($condi);
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->result_array();
	}
	public function productdetails($tab,$condi)
	{
		$this->db->select("*");
		$this->db->where($condi);
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->row_array();
	}

	public function subcategory($tab,$condi)
	{
		$this->db->select("*");
		$this->db->where($condi);
		$this->db->where("parent_id !=",0);
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->result_array();

	}
	
}
	
	
    